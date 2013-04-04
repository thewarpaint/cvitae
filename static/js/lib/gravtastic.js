var abbreviations = {
	"size": 	's',
	"default": 	'd',
	"rating": 	'r'
};

window.Gravtastic = function(email, options) {
	var host, id, key, opts, params, path, val, _ref;

	if (options == null) {
		options = {};
	}

	id = MD5(email.toString().toLowerCase());
	opts = {};
	_ref = Gravtastic.defaults;

	for (key in _ref) {
		val = _ref[key];
		opts[key] = val;
	}

	for (key in options) {
		val = options[key];
		opts[key] = val;
	}

	host = opts.secure ? "https://secure.gravatar.com/avatar" : "http://gravatar.com/avatar";
	path = "/" + id + "." + (opts.filetype || 'png');

	params = "?" + ((function() {
		var _results = [];
		for (key in opts) {
			val = opts[key];
			if (key !== "secure" && key !== "filetype") {
				_results.push("" + (abbreviations[key] || key) + "=" + val);
			}
		}
		return _results;
	})()).join('&');

	return host + path + params;
};

window.Gravtastic.defaults = {
	rating: 	'PG',
	secure: 	false,
	filetype: 	'png',
	size: 		132
};