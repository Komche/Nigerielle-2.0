

let i = 2;


$(document).ready(function () {
	var radius = 200;
	var fields = $('.itemDot');
	var container = $('.dotCircle');
	var width = container.width();
	radius = width / 2.5;

	var height = container.height();
	var angle = 0, step = (2 * Math.PI) / fields.length;
	fields.each(function () {
		var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
		var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
		if (window.console) {
			console.log($(this).text(), x, y);
		}

		$(this).css({
			left: x + 'px',
			top: y + 'px'
		});
		angle += step;
	});


	$('.itemDot').click(function () {

		var dataTab = $(this).data("tab");
		$('.itemDot').removeClass('active');
		$(this).addClass('active');
		console.log($(this));
		if ($(this).hasClass("itemDot1")) {
			$("#activite-h1").text("Nigerielles Events");
			$("#activite-tile").text("Nigerielles Events est le pôle événementiel de l’organisation.");
			$("#activite-content").text("Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année, nous organisons des séries d’événements d’envergure nationale et sous-régionale pour créer un cadre d’échange et de partenariat entre femmes entrepreneures et potentiels partenaires/investisseurs. Notre principal cible étant les femmes, nous menons des campagnes de sensibilisations aux femmes de toutes les couches sociales, mais aussi des campagnes de leadership adressées aux jeunes filles pour les motiver à donner le meilleur d’elles-mêmes dans la société, le tout commençant par une meilleure scolarisation. Notre événement phare de l’année est le Salon National de l’Entrepreneuriat Féminin organisé en fin d’année qui mobilise entre 3.000 et 5.000 visiteurs à chaque édition.");
		} else if ($(this).hasClass("itemDot3")) {
			$("#activite-img").attr("src", "public/img/n1.JPG");
			$("#activite-h1").text("Nigerielles Business Club");
			$("#activite-tile").text("Notre organisation est composée de dynamiques femmes d’affaires.");
			$("#activite-content").text("Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en business club. Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités de développement communautaire. Elles discutent, échangent des idées de développement durable, s’entraident, se soutiennent mais surtout elles forment entre elles un réseau de clients/prestataires au sein duquel chaque femme entrepreneure est sollicitée.");
		} else if ($(this).hasClass("itemDot4")) {
			$("#activite-img").attr("src", "public/img/n13.jpg");
			$("#activite-h1").text("Nigerielles Training");
			$("#activite-tile").text("C’est le volet formation de l’organisation.");
			$("#activite-content").text("En partenariat avec des institutions et des cabinets de formation de la place, Nigerielles s’engage à former ‘’autrement’’ les femmes entrepreneurs, les porteuses de projets ou leaders du Niger dans toutes les régions. Il s’agit principalement des formations de développement personnel et professionnel, des formations techniques et managériales en entrepreneuriat et création d’entreprise et des coachings personnalisés. A travers ces formations, nous souhaiterons rehausser le nombre de femmes entrepreneurs dynamiques avec des idées innovantes et un système de gestion inégalé en vue de pérenniser les activités des femmes.");
		}else if ($(this).hasClass("itemDot5")) {
			$("#activite-img").attr("src", "public/img/n10.JPG");
			$("#activite-h1").text("La Smart House");
			$("#activite-tile").text("Pépinière pour les femmes entrepreneures.");
			$("#activite-content").text("La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures courant 2019. Il s’agira de la réalisation et la concrétisation de toutes les actions menées par Nigerielles pour le développement des compétences des femmes. Le centre accueillera pour la première année 25 femmes avec des entreprises ou des projets d’entreprises innovants à fort impact sociétal. En partenariat avec d’autres centres du Niger et de la sous-région, nous relèverons les défis de l’entreprenariat féminin en Afrique afin d’enrichir le potentiel personnel et entrepreneurial des femmes.");
		}else if ($(this).hasClass("itemDot6")) {
			$("#activite-img").attr("src", "public/img/n4.JPG");
			$("#activite-h1").text("Nigerielles Le Magazine");
			$("#activite-tile").text("Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin");
			$("#activite-content").text("Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine d’éducation entrepreneuriale, est conçu en format papier et électronique pour édifier la population sur les différents acteurs de l’entrepreneuriat féminin, mais aussi le déroulé du Salon. Le magazine récence aussi toutes les activités organisées par des femmes nigériennes tout au long de l’année en vue de les promouvoir. Il s’agit-là, de vulgariser l’entrepreneuriat féminin à travers un magazine au design inégalé pour séduire le lecteur et attirer les potentiels partenaires.");
		}
		$('.CirItem').removeClass('active');
		$('.CirItem' + dataTab).addClass('active');
		i = dataTab;

		$('.dotCircle').css({
			"transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
			"transition": "2s"
		});
		$('.itemDot').css({
			"transform": "rotate(" + ((i - 1) * 36) + "deg)",
			"transition": "1s"
		});


	});

	/*setInterval(function(){
		var dataTab= $('.itemDot.active').data("tab");
		if(dataTab>6||i>6){
		dataTab=1;
		i=1;
		}
		$('.itemDot').removeClass('active');
		$('[data-tab="'+i+'"]').addClass('active');
		$('.CirItem').removeClass('active');
		$( '.CirItem'+i).addClass('active');
		i++;
		
		
		$('.dotCircle').css({
			"transform":"rotate("+(360-(i-2)*36)+"deg)",
			"transition":"2s"
		});
		$('.itemDot').css({
			"transform":"rotate("+((i-2)*36)+"deg)",
			"transition":"1s"
		});
		
		}, 5000);*/

});




$(document).ready(function () {
	$('.link-gallery').click(function () {
		var descripcion = $(this).attr('title');
		$('#caption').html(descripcion);
		var img = $(this).find('img');
		var src = img.attr('src')
		$('#img01').attr('src', src);
		$('#myModal').css('display', 'block');
		$('.modal-backdrop').remove();
	});

	$('.close').click(function () {
		$('#myModal').css('display', 'none');
	});

});
