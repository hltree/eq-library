module.exports = function(grunt, config, parameters, done) {
	var workFolder = parameters.releaseWorkFolder || './release/source';
	function endForError(e) {
		process.stderr.write(e.message || e);
		done(false);
	}
	try {
		var buildParameters = require('util')._extend({}, parameters);
		buildParameters = parameters;
		buildParameters.source = workFolder;
		if (buildParameters.keepShortEcho === null || buildParameters.keepShortEcho === undefined) {
		    buildParameters.keepShortEcho = true;
		}
		require('../remove-short-tags.js')(grunt, config, buildParameters, done);
	}
	catch(e) {
		endForError(e);
	}
};