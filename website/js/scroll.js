$(document).ready(function(){

	setBindings();
});
	function setBindings(){
		$("#navbar ul li a").click(function(e)){


			e.preventDefault();
			var sectionID = e.currentTarget.id + "section";

			$("html body").animate({
				scrollTop:$("#" + sectionID).offset().top


			},1000)
		})
	}
