<br>
<style type="text/css"> 

.menu-wrapper {
	position: relative; 
	overflow-x: hidden;
	overflow-y: hidden;
}

.menu	{ 
	box-sizing: border-box;
	
	white-space: nowrap;
	overflow-x: auto;
	overflow-y: hidden;
	-webkit-overflow-scrolling: touch;
	
}

	.item {
		display: inline-block;  
		padding: 1em;
		box-sizing: border-box;
	}

.paddles {
}
.paddle {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 3em;
}
.left-paddle {
	left: 0;
}
.right-paddle {
	right: 0;
}
.hidden {
	display: none;
}

.print {
	margin: auto;
	max-width: 500px;
	
	span {
		display: inline-block;
		width: 100px;
	}
}
</style>
<div class="container">
	<h2>Bestselling Books</h2>
	<hr>
	<div class="menu-wrapper">
	<ul class="menu col-sm-12 list"> 
	<li class="item"><div class="col-sm-3">New Div</div></li>
	<li class="item"><div class="col-sm-3">New Div</div></li>
	<li class="item"><div class="col-sm-3">New Div</div></li>
	<li class="item"><div class="col-sm-3">New Div</div></li>
	<li class="item"><div class="col-sm-3">New Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	<li class="item"><div class="col-sm-3">Another Div</div></li>
	</ul>


	<div class="paddles">
		<button class="left-paddle paddle hidden">
			<
		</button>
		<button class="right-paddle paddle">
			>
		</button>
	</div>

</div>
	<hr>
	<h2>New Books</h2>
	<hr>
	<h2>Magazines</h2>
	<hr>
	<h2>Top Rated Articles</h2>
	<hr> 
</div>
<script type="text/javascript">
	// duration of scroll animation
var scrollDuration = 300;
// paddles
var leftPaddle = document.getElementsByClassName('left-paddle');
var rightPaddle = document.getElementsByClassName('right-paddle');
// get items dimensions
var itemsLength = $('.item').length;
var itemSize = $('.item').outerWidth(true);
// get some relevant size for the paddle triggering point
var paddleMargin = 20;

// get wrapper width
var getMenuWrapperSize = function() {
	return $('.menu-wrapper').outerWidth();
}
var menuWrapperSize = getMenuWrapperSize();
// the wrapper is responsive
$(window).on('resize', function() {
	menuWrapperSize = getMenuWrapperSize();
});
// size of the visible part of the menu is equal as the wrapper size 
var menuVisibleSize = menuWrapperSize;

// get total width of all menu items
var getMenuSize = function() {
	return itemsLength * itemSize;
};
var menuSize = getMenuSize();
// get how much of menu is invisible
var menuInvisibleSize = menuSize - menuWrapperSize;

// get how much have we scrolled to the left
var getMenuPosition = function() {
	return $('.menu').scrollLeft();
};

// finally, what happens when we are actually scrolling the menu
$('.menu').on('scroll', function() {

	// get how much of menu is invisible
	menuInvisibleSize = menuSize - menuWrapperSize;
	// get how much have we scrolled so far
	var menuPosition = getMenuPosition();

	var menuEndOffset = menuInvisibleSize - paddleMargin;

	// show & hide the paddles 
	// depending on scroll position
	if (menuPosition <= paddleMargin) {
		$(leftPaddle).addClass('hidden');
		$(rightPaddle).removeClass('hidden');
	} else if (menuPosition < menuEndOffset) {
		// show both paddles in the middle
		$(leftPaddle).removeClass('hidden');
		$(rightPaddle).removeClass('hidden');
	} else if (menuPosition >= menuEndOffset) {
		$(leftPaddle).removeClass('hidden');
		$(rightPaddle).addClass('hidden');
}

	// print important values
	$('#print-wrapper-size span').text(menuWrapperSize);
	$('#print-menu-size span').text(menuSize);
	$('#print-menu-invisible-size span').text(menuInvisibleSize);
	$('#print-menu-position span').text(menuPosition);

});

// scroll to left
$(rightPaddle).on('click', function() {
	$('.menu').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
});

// scroll to right
$(leftPaddle).on('click', function() {
	$('.menu').animate( { scrollLeft: '0' }, scrollDuration);
});
</script>