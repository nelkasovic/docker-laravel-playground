<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index(): View
    {
        return view('order.index')->with([
            'orders' => Order::all()->sortByDesc('created_at')
        ]);
    }

    public function destroy(Order $order): RedirectResponse
    {
        $order->delete();

        return back();
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Order::query()->create([
                'name' => $request->input('name')
            ]);
        } catch (\Exception $exception) {
            Log::error('Failed', [
                'exception' => $exception->getMessage()
            ]);
            // TODO: Show error in view

            throw $exception;
        }

        return redirect(route('orders.index'));
    }

    public function create(): View
    {
        return view('order.create')->with([
            'articles' => Article::all()->sortByDesc('created_at')
        ]);
    }

    public function stepOne(Article $article): View
    {
        $itemList = $article->items()->pluck('item_id');

        return view('order.step-one')->with([
            'article' => $article,
            'content' => Article::query()->whereIn('id', $itemList)->get()
        ]);
    }

    public function stepTwo(Request $request): View
    {
        $selectedItems = array_keys($request->input('items'));
        $articles = Article::query()->whereIn('id', $selectedItems)->get();

        return view('order.step-two')->with([
            'articles' => $articles,
        ]);
    }
}
