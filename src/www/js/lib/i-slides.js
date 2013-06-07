// slide prototype
Util.Objects["slide"] = new function() {
	this.init = function(e) {

		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
/*
Util.Objects["sliderefx1"] = new function() {
	this.init = function(e) {
		u.ref(e, "a");
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
Util.Objects["sliderefx2"] = new function() {
	this.init = function(e) {
		u.ref(e, "a");
		u.ref(e, "b");
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
Util.Objects["sliderefx3"] = new function() {
	this.init = function(e) {
		u.ref(e, "a");
		u.ref(e, "b");
		u.ref(e, "c");
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
Util.Objects["sliderefx4"] = new function() {
	this.init = function(e) {
		u.ref(e, "a");
		u.ref(e, "b");
		u.ref(e, "c");
		u.ref(e, "d");
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
Util.Objects["sliderefx5"] = new function() {
	this.init = function(e) {
		u.ref(e, "a");
		u.ref(e, "b");
		u.ref(e, "c");
		u.ref(e, "d");
		u.ref(e, "e");
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}
*/
// slide prototype
Util.Objects["slide1"] = new function() {
	this.init = function(e) {

		var go = u.ge("go", e)
		go.e = e;
		go.clicked = function() {
			u.removeClass(document.body, "front");
			u.ge("header").navigation("slide7_1");
		}
		u.e.click(go);
		
		var hb = u.ge("hb", e)
		hb.e = e;
		hb.clicked = function() {
			u.removeClass(document.body, "front");
			u.ge("header").navigation("slide8");
		}
		u.e.click(hb);

		var qol = u.ge("qol", e)
		qol.e = e;
		qol.clicked = function() {
			u.removeClass(document.body, "front");
			u.ge("header").navigation("slide9");
		}
		u.e.click(qol);

		var flex = u.ge("flex", e)
		flex.e = e;
		flex.clicked = function() {
			u.removeClass(document.body, "front");
			u.ge("header").navigation("slide10");
		}
		u.e.click(flex);

		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide2"] = new function() {
	this.init = function(e) {

		var icons = u.ges("icon", e);
		for(i = 1; icon = icons[i-1]; i++) {
			icon.e = e;
			icon.i = i;
			icon.clicked = function() {
				u.removeClass(this.e, "icon[0-9]")
				u.addClass(this.e, "icon"+this.i);
			}
			u.e.click(icon);
		}

		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide3_1"] = new function() {
	this.init = function(e) {

		// display (mask)
		display = u.ae(e, "div");
		u.addClass(display, "display");

		// wheel
		wheel = u.ae(display, "div");
		u.addClass(wheel, "wheel");

		// wheel layover
		pseudo = u.ae(display, "div");
		u.addClass(pseudo, "pseudo");
		pseudo.e = e;
		pseudo.wheel = wheel;
		pseudo.slices = u.getIJ(e, "slices");

		u.a.rotate(wheel, 0);

		// set rotate defaults + reset slide drag
		u.e.drag(pseudo, pseudo, true);
		pseudo.picked = function(event) {
			u.e.resetEvents(this.e.swiper);

			this.rotation_offset  = this.wheel.rotation;
			this.start_x = event.targetTouches ? event.targetTouches[0].pageX : event.pageX;
		}

		// calculate movement and rotate wheel
		// just use x-axis for quick solution
		pseudo.moved = function(event) {
			movement_x = (event.targetTouches ? event.targetTouches[0].pageX : event.pageX) - this.start_x;

			u.a.transition(this.wheel, "none");
			u.a.rotate(this.wheel, (this.rotation_offset + movement_x/5));
		}

		// calculate movement and rotate wheel
		pseudo.dropped = function(event) {
			var pie_size = 360/this.slices;
			var pies = Math.round(this.wheel.rotation/pie_size);
			var new_angle = pies * pie_size;

			u.a.transition(this.wheel, "all 0.5s ease-out");
			u.a.rotate(this.wheel, new_angle);
		}

		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

Util.Objects["slide4"] = new function() {
	this.init = function(e) {
		var ref = u.ge("ref", e)
		u.e.drag(ref, new Array(0, u.ge("ref_drag", e).offsetHeight-ref.offsetHeight, ref.offsetWidth, ref.offsetHeight))

		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

Util.Objects["slide5"] = new function() {
	this.init = function(e) {
		var ref = u.ge("smpc", e)
		u.e.drag(ref, new Array(0, u.ge("drag", e).offsetHeight-ref.offsetHeight, ref.offsetWidth, ref.offsetHeight))

		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide6"] = new function() {
	this.init = function(e) {
		var care_link = u.ge("care_link", e)
		care_link.e = e;
		care_link.clicked = function() {location.href = "http://www.2care.nl/";}
		u.e.click(care_link);

		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide7_2"] = new function() {
	this.init = function(e) {

		// graph section
		var graph = u.ae(e, "div", "graph");
		graph.e = e;
		e.title = u.ge("h2", e).innerHTML;

		var bar = u.ae(graph, "div", "bar");
		graph.bar = bar;

		var graph_value = u.ae(e, "div", "graph_value");
		graph.graph_value = graph_value;

		var new_height = bar.offsetHeight;
		new_height = new_height > 40 ? new_height : 40;
		new_height = new_height < 330 ? new_height : 330;
		var new_height_value = (((new_height-40)/290) * 300);
		graph_value.innerHTML = Math.round(new_height_value);


		u.e.drag(graph, graph, true);
		graph.picked = function() {
			u.e.resetEvents(this.e.swiper);
		}
		graph.moved = function(event) {
			new_height = this.offsetHeight - ((event.targetTouches ? event.targetTouches[0].pageY : event.pageY) - u.absY(u.qs("#page")) - (this.offsetTop+60));
			new_height = new_height > 40 ? new_height : 40;
			new_height = new_height < 330 ? new_height : 330;
			this.bar.style.height = new_height + "px";
			this.new_height_value = Math.round(((new_height-40)/290) * 300);
			u.a.scale(this.e.canvas, this.new_height_value/300);

			this.graph_value.innerHTML = Math.round(this.new_height_value);
		}
		graph.dropped = function() {
//			submitCustomEvent(category, label, value, valueType, categoryId, labelId, valueId);
//			submitCustomEvent(this.e.title, "Hoeveel patienten", this.new_height_value, "String", null, null, null);
			u.storeCustomEvent(this.e.title, "Hoeveel patienten", this.new_height_value, "String");
		}

		// pie section
		var range = u.ae(e, "div", {"class" : "range"});
//		e.range.e = e;

		var knob = u.ae(range, "div", {"class" : "knob"});
		knob.e = e;

		if(!e.canvas) {
			e.canvas = u.ae(e, "canvas");
			e.canvas.width = 300;
			e.canvas.height = 300;
		}
		u.a.scale(e.canvas, new_height_value/300);


		var pie_value_on = u.ae(e, "div", "pie_value_on");
		e.pie_value_on = pie_value_on;
		e.pie_value_on.innerHTML = "0%";

		var pie_value_off = u.ae(e, "div", "pie_value_off");
		e.pie_value_off = pie_value_off;
		e.pie_value_off.innerHTML = "100%";


		knob.picked = function() {
			u.e.resetEvents(this.e.swiper);
		}

		knob.moved = function() {
			var progress = Math.round(this.element_x / (this.end_drag_x - this.start_drag_x - this.offsetWidth)*100);

			this.e.pie_value_off.innerHTML = 100-progress+"%"
			this.e.pie_value_on.innerHTML = progress+"%"


			var ctx = this.e.canvas.getContext("2d");

			var radius = Math.min(this.e.canvas.width, this.e.canvas.height) / 2;
			var center_x = this.e.canvas.width/2;
			var center_y = this.e.canvas.height/2;

			var total = 100;
			var current_value = progress / total;
			e.current_value;
			// reverse full/empty values 0 = 1 and 1 = 0
			current_value = current_value == 0 ? 1 : current_value == 1 ? 0 : current_value;

			// clear canvas
			ctx.clearRect(0,0,300,300);

			ctx.beginPath();
			ctx.moveTo(center_x, center_y);
			ctx.arc(
				center_x,
				center_y,
				radius,
				Math.PI * (- 0.5 + 2),
				// -0.5 sets set the start to be top
				Math.PI * (- 0.5 + 2 * current_value),
				false
			);
			ctx.lineTo(center_x, center_y);
			// line back to the center
			ctx.closePath();
			ctx.fillStyle = "#fff06d";
			ctx.fill();

			this.current_value = current_value;
		}
		knob.dropped = function() {
//			submitCustomEvent(category, label, value, valueType, categoryId, labelId, valueId);
//			submitCustomEvent(this.e.title, "Dialyse", (this.current_value*100)+"%", "String", null, null, null);
//			submitCustomEvent(this.e.title, "Niet-dialyse", (100-(this.current_value*100))+"%", "String", null, null, null);

			u.storeCustomEvent(this.e.title, "Dialyse", (this.current_value*100)+"%", "String");
			u.storeCustomEvent(this.e.title, "Niet-dialyse", (100-(this.current_value*100))+"%", "String");
		}

		u.e.drag(knob, new Array (0, 0, range.offsetWidth, knob.offsetHeight), true, true);


		// announce readystate
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide8"] = new function() {
	this.init = function(e) {

		var pop_selects = u.ges("pop_select", e);
		for(i = 1; pop_select = pop_selects[i-1]; i++) {
			pop_select.e = e;
			pop_select.i = i;
			pop_select.clicked = function() {
				u.toggleClass(this.e, "pop"+this.i+"_area")
			}
			u.e.click(pop_select);
		}
		var pops = u.ges("pop", e);
		for(i = 1; pop = pops[i-1]; i++) {
			pop.e = e;
			pop.i = i;
			pop.clicked = function() {
				u.removeClass(this.e, "pop"+this.i+"_area")
			}
			u.e.click(pop);
		}

		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

// slide prototype
Util.Objects["slide9"] = new function() {
	this.init = function(e) {
		var explain_button = u.ge("explain_button", e)
		explain_button.e = e;
		explain_button.clicked = function() {
			u.toggleClass(this.e, "explain_show");
		}
		u.e.click(explain_button);

		var square_button = u.ge("square_button", e)
		square_button.e = e;
		square_button.clicked = function() {
			u.toggleClass(this.e, "square");
		}
		u.e.click(square_button);

		var circle_button = u.ge("circle_button", e)
		circle_button.e = e;
		circle_button.clicked = function() {
			u.toggleClass(this.e, "circle");
		}
		u.e.click(circle_button);

		var outline_button = u.ge("outline_button", e)
		outline_button.e = e;
		outline_button.clicked = function() {
			u.toggleClass(this.e, "outline");
		}
		u.e.click(outline_button);
	
		// whatever
		u.addClass(e, "ready");
		u.ge("content").ready();
	}
}

