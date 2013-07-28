$(document).ready(function(){
	//update paging met ajax

	$('.categories a').on('click', function (e) {
		var url = $(this).attr('href'),
			el = $(this),
			title = $(this).text() + ' | Michiel Koning';
		history.replaceState(null, title, url);

		$.ajax({
			url: url,
			type: 'get',
			dataType: 'html',
			success: function (data) {
				var content = $(data).find('#portfolio-content');
				$('title').text(title)
				$('.portfolio').html(content);
				$('.current-cat').removeClass('current-cat');
				el.parent().addClass('current-cat');
			}
		});

		e.preventDefault();
	});
})