# Rightfoot

A css starter file.

## Invisible grid implementation

Current experimental grid system allows you to implement a grid layout via @mixin.

The @mixin takes 4 arguments

1. Column class: This is the `.classname` of the column elements within the container element.
```html
<div class="container">
	<div class="wow-column">
		<!-- content -->
	</div>
	<div class="wow-column">
		<!-- sidebar -->
	</div>
	<div class="wow-column">
		<!-- mini-sidebar -->
	</div>
</div>
```

```sass
.container {
	@include grid(
		'.wow-column',
		...
		...
		...
	);
}
```

2. Container max: This is the maximum width of the container element. Defaults to `100%` - This is a temporary argument
```sass
.container {
	@include grid(
		'.wow-column',
		'1600px',
		...
		...
	);
}
```

3. Grid columns: The amount of columns the grid is based on. Defaults to `12`
```sass
.container {
	@include grid(
		'.wow-column',
		'1600px',
		'12',
		...
	);
}
```

4. Column spans: This accepts a SCSS `map` of key/value pairs consisting of minimum breakpoint measurements and a `list` of column span values for each column (referenced in their DOM ordering)
```sass
.container {
	@include grid(
		'.wow-column',
		'1600px',
		'12',
		(
			0px: 10 2,
			600px: 8 4,
			1000px: 8 2 2
		)
	);
}
```
The above would result in a default layout of 10/2, 8/4 for devices 600px and up, and 8/2/2 for devices 1000px and up.