function getUrlParams(dParam) {
	var dPageURL = window.location.search.substring(1),
		dURLVariables = dPageURL.split('&'),
		dParameterName,
		i;

	for (i = 0; i < dURLVariables.length; i++) {
		dParameterName = dURLVariables[i].split('=');

		if (dParameterName[0] === dParam) {
			return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
		}
	}
}

(function($) {

	var direction =  getUrlParams('dir');
	if(direction != 'rtl')
	{direction = 'ltr'; }

	var dlabSettingsOptions = {
		typography: "roboto",
        version: "light",
        layout: "Vertical",
        headerBg: "color_1",
        navheaderBg: "color_11",
        sidebarBg: "color_1",
        sidebarStyle: "full",
        sidebarPosition: "fixed",
        headerPosition: "fixed",
        containerLayout: "full",
        direction: direction
	};
	
	jQuery(document).ready(function(){
		new dlabSettings(dlabSettingsOptions); 
	});
		
	jQuery(window).on('resize',function(){
		new dlabSettings(dlabSettingsOptions); 
	});     
	
})(jQuery);