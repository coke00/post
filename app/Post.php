<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	// protected static function boot()
	// {
	// 	// parent::boot();
	// 	//
  //   //             // Customize your own rule here!
	// 	// if (\Request::is('management/*') && Auth::user()->canBlogSolo()) {
	// 	// 	static::addGlobalScope('author', function (Builder $builder) {
	// 	// 		$builder->where('author_id', '=', Auth::user()->id);
	// 	// 	});
	// 	// }
	// }
}
