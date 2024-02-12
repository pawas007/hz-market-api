<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryProductCollection;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $categories = Category::query()->orderBy('title')->get(['id', 'title']);
        return response()->json($categories);
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return CategoryProductCollection
     */
    public function getProductsByCategory(Category $category, Request $request): CategoryProductCollection
    {
        $products = $category->products()->paginate($request->per_page ?? 12);
        return new CategoryProductCollection($products);
    }
}
