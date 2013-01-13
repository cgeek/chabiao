(function(){

	var alias = {
		'jquery':'libs/jquery/1.7.1/jquery',
		'$':'libs/jquery/1.7.1/jquery',
		'underscore': 'libs/underscore/1.2.1/underscore',
		'backbone':'libs/backbone/0.9.2/backbone',
		'mustache':'libs/mustache/0.4.0/mustache',
		'masonry':'libs/masonry/2.1.0/masonry',

		'ueditor':'libs/ueditor/1.2.2/editor_all',
		'ueditor-css':'libs/ueditor/1.2.2/themes/default/ueditor.css',

		'json':'libs/json/1.0.1/json',
		'cookie': 'libs/cookie/1.0.2/cookie',

		'ajaxupload':'libs/ajaxupload/1.0.0/fileuploader',

		//all plugins
		'plugins': 'modules/plugins',
		'bootstrap': 'libs/bootstrap/2.0.4/bootstrap',
		'filedrop': 'libs/filedrop/jquery.filedrop',
		'validate': 'libs/jquery-plugin/validate/jquery.validate.min',

		'datepicker': 'libs/datepicker/1.3.0/glDatePicker',
		'datepicker-css': 'libs/datepicker/1.3.0/default.css',
		// modules
		'account.head' : 'modules/account.head'
		
	};

	var map=[
		//[/^(.*\/js\/.*?)([^\/]*\.js)$/i, '$1__build/$2?t=20120301']
		[/^(.*\/js\/.*?)([^\/]*\.js)$/i, '$1$2?t=20130106']
	];

	/*
	if (seajs.debug) {
		for (var k in alias) {
			if(alias.hasOwnProperty(k)) {
				var p = alias[k];
				if (!/\.(?:css|js)$/.test(p)) {
					alias[k] += '-debug';
				}
			}
		}
		map = [];
	}
	*/
	seajs.config({
		alias:alias,
		preload:[
			this.Json ? '':'json'
		],
		map:map,
		base:'http://'+ location.host +'/assets/js/'
	});

})();

define(function(require, exports){
	exports.load = function(filename){
		if (!Array.prototype.forEach)
		{
			Array.prototype.forEach = function(fun /*, thisp*/)
			{
				var len = this.length;
				if (typeof fun != "function")
					throw new TypeError();

				var thisp = arguments[1];
				for (var i = 0; i < len; i++)
				{
					if (i in this)
						fun.call(thisp, this[i], i, this);
				}
			};
		}
		filename.split(',').forEach(function(modName){
			require.async('./' + modName, function(mod){
				if(mod && mod.init){
					mod.init();
				}
			});
		});
	};

	require.async('./head');
});
