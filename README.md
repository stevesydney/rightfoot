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
