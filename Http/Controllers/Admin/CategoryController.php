<?php
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use Illuminate\Http\Request;
    class CategoryController extends Controller
    {
        public function create()
        {
            // shows form
            return view('admin.categories.form');
        }
        public function store(Request $request)
        {
            $new_category = $request->category;
            Category::create(['name' => $new_category]);
            return view('admin.categories.form-success')->with('cat',$new_category);
        }
    }
