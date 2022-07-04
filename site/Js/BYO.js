
function updatePrice() {
	var ItemLines = document.getElementsByClassName('Item');

	for (var i = 0; i < ItemLines.length; i++) {
		var ItemRow = ItemLines[i];
		var PriceItem = ItemRow.getElementsByClassName('price');
		var Name = ItemRow.getElementsByClassName('name');
		var detail = ItemRow.getElementsByClassName('detail');
		
	}

}



var listitem = document.getElementsByTagName('input');
for (var i = 0; i < listitem.length; i++) {
	var item = listitem[i];
	item.addEventListener('click', addCart);

}
function addCart(event) {
	var item = event.target;
	var itembox = item.parentElement;
	var price = itembox.getElementsByClassName('price')[0].innerText;
	var detail = itembox.getElementsByClassName('detail')[0].innerText;
	var name = item.getAttribute('name');
	UpdateList(name, detail, price);
	//updatePrice();
}
function UpdateList(name, detail, price) {
	console.log("clicked",name);
	var names = document.getElementsByClassName('name');
	var RAMs = document.getElementsByClassName('RAM');
	for (var i = 0; i < RAMs.length; i++) {
		if (RAMs[i].checked) {
			var RAMbox = RAMs[i].parentElement;
			var RAMpr = RAMbox.getElementsByClassName('price')[0];
			var RAMdt = RAMbox.getElementsByClassName('detail')[0];
			//console.log("cost of ram", RAMpr, ", and type of it", RAMdt);
		}
	}
	var RAMAs = document.getElementsByClassName('Amount');
	for (var i = 0; i < RAMAs.length; i++) {
		if (RAMAs[i].checked) {
			var RAMAbox = RAMAs[i].parentElement;
			var RAMApr = RAMAbox.getElementsByClassName('price')[0];
			//console.log("amount of ram", RAMApr);

		}
	}
	for (var i = 0; i < names.length; i++) {
		if (names[i].innerHTML == name && !(names[i].innerHTML == 'RAM')) {
			var itemline = names[i].parentElement.parentElement;
			var priceline = itemline.getElementsByClassName('price')[0];
			var detailline = itemline.getElementsByClassName('detail')[0];
			console.log(names[i], priceline);
			priceline.innerText = price;
			detailline.innerText = detail;
		} else if (names[i].innerHTML == 'RAM') {
			console.log(names[i]);
			var itemline = names[i].parentElement.parentElement;
			var priceline = itemline.getElementsByClassName('price')[0];
			var detailline = itemline.getElementsByClassName('detail')[0];
			if (name == 'RAM') {
				console.log("you clicked RAM RAM/Ammount/Cart- ", RAMpr.innerText, RAMApr.innerText, priceline);
				priceline.innerText = RAMpr.innerText * RAMApr.innerText;
				detailline.innerText = RAMApr.innerText + " x " + RAMdt.innerText;
				console.log("Totaling - ", priceline.innerText);
			} else if (name == 'Amount') {
				console.log("you clicked amount RAM/Ammount/Cart- ", RAMpr.innerText, RAMApr.innerText, priceline);
				priceline.innerText = RAMpr.innerText * RAMApr.innerText;
				detailline.innerText = RAMApr.innerText + " x " + RAMdt.innerText;
				console.log("Totaling - ", priceline.innerText);
			}
		}
	}
}