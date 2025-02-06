<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductsWidget extends BaseDimmer
{
public function run()
{
$count = Product::count();
$string = 'Products';

return view('voyager::dimmer', array_merge($this->config, [
'icon' => 'voyager-bag',
'title' => "{$count} {$string}",
'text' => __('voyager::dimmer.product_text', ['count' => $count, 'string' => strtolower($string)]),
'button' => [
'text' => 'View all products',
'link' => route('voyager.products.index'),
],
'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
]));
}

public function shouldBeDisplayed()
{
return true;
}
}
