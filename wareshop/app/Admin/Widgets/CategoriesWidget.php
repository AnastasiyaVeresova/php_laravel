<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoriesWidget extends BaseDimmer
{
public function run()
{
$count = Category::count();
$string = 'Categories';

return view('voyager::dimmer', array_merge($this->config, [
'icon' => 'voyager-categories',
'title' => "{$count} {$string}",
'text' => __('voyager::dimmer.category_text', ['count' => $count, 'string' => strtolower($string)]),
'button' => [
'text' => 'View all categories',
'link' => route('voyager.categories.index'),
],
'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
]));
}

public function shouldBeDisplayed()
{
return true;
}
}
