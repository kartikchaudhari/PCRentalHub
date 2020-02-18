//auto dismissable alert
$(document).ready(function() {
    $("#the-alert").fadeTo(7500, 500).slideUp(500, function() {
      $("#the-alert").slideUp(7500);
    });
});

(function() {
	$(function() {
    	var $preview, editor, mobileToolbar, toolbar, allowedTags;
        Simditor.locale = 'en-US';
        toolbar = ['bold','italic','underline','fontScale','|','ol','ul','blockquote','table','link'];
        mobileToolbar = ["bold", "italic", "underline", "ul", "ol"];
        if (mobilecheck()) {
            toolbar = mobileToolbar;
        }
    	allowedTags = ['br','span','a','img','b','strong','i','strike','u','font','p','ul','ol','li','blockquote','pre','h1','h2','h3','h4','hr','table'];
        editor = new Simditor({
            textarea: $('#pageContent'),
            placeholder: 'Tell us more about your advertise...',
            toolbar: toolbar,
            pasteImage: false,
            upload: false,
            allowedTags: allowedTags
        });
        $preview = $('#preview');
        if ($preview.length > 0) {
            return editor.on('valuechanged', function(e) {
                return $preview.html(editor.getValue());
            });
        }
	});
}).call(this);


$('#postadcity').select2({
	ajax: {
		url: "cities/searchCityFromCountry",
		dataType: 'json',
		delay: 250,
		data: function (params) {
		return {
					q: params.term, // search term
			};
		},
		processResults: function (data, params) {
			var values = [];              
			$.each(data, function (key, val) { 
				if(val._id != ''){
	        		values.push({
	        			id: val.id,
	        			text: val.asciiname+', '+val.statename
	        		});
				} 
		 	}); 
			return { 
				results: values, //appending values from server to options tag
			};
		},
		cache: true
	},
	escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
	minimumInputLength: 2,
});


