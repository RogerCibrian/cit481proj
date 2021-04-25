		var slideIndex = 0;
	//	showSlides();
		
		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("videogame_slides");
			var dots = document.getElementsByClassName("dots");
			for (i = 0; i < slides.length; i++){
				slides[i].style.display = "none";
			}
	
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}
			for (i = 0; i < dots.length; i++){
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 6000);
		}
		showSlides();
		
		
		
		/*****STAFFS' BEST PICKS********/
			const ratings = {
			  CODBO1 : 5.0,
			  GOW4 : 3.65,
			  RDR2 : 4.42,
			  Control : 4.15,
			  Minecraft : 3.90,
			  W3WH : 5.0,
			  ACNH : 4.5
			};

			// total number of stars
			const starTotal = 5;

			for(const rating in ratings) {  
			  const starPercentage = (ratings[rating] / starTotal) * 100;
			  const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
			  document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded; 
			}