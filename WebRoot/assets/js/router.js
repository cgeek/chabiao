(function(){

	var alias = {

		'_' : 'underscore/underscore-min',
		'jquery':'jquery/jquery/1.10.1/jquery.js',
		'json': 'json/json3',
		'cookie': 'jquery/cookie/jquery.cookie',
		'jquery-placeholder': 'jquery/placeholder/jquery.placeholder',
		'jquery-form':'jquery/form/jquery.form.min',
		'jquery-easing':'jquery/easing/1.3.0/easing',
		'jquery-validate':'jquery/validate/jquery.validate.min',
		'jquery-cycle':'jquery/cycle/cycle.js',
		'jquery-ui-core':'jquery/jquery-ui/ui/jquery.ui.core',
		'jquery-ui-datepicker':'jquery/jquery-ui/ui/jquery.ui.datepicker',
		'jquery-ui-widget':'jquery/jquery-ui/ui/jquery.ui.widget',
		'jquery-rte' : 'jquery/rte/1.2/jquery.rte.js',
		'jquery-rte-tb' : 'jquery/rte/1.2/jquery.rte.tb.js',
		'jquery-rte-css' : 'jquery/rte/1.2/jquery.rte.css',
		'mustache':'mustache/0.7.2/mustache',
		'lightBox' : 'jquery/lightBox/0.1/lightBox',
		'uploadify' : 'jquery/uploadify/jquery.uploadify',
		'fileupload' : 'jquery/fileupload/9.0.1/jquery.fileupload',

		'bootstrap' : 'bootstrap/3.0.0/bootstrap.min',
		'bootstrap-datepicker' : 'bootstrap/datepicker/bootstrap-datetimepicker.min',


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
