function updatePrice(name) {
	var Cases = document.getElementsByClassName('Case');
	for (var i = 0; i < Cases.length; i++) {
		if (Cases[i].checked) {
			var Casebox = Cases[i].parentElement;
			var Casepr = Casebox.getElementsByClassName('price')[0].innerText;

		}
	}
	var CPUs = document.getElementsByClassName('CPU');
	for (var i = 0; i < CPUs.length; i++) {
		if (CPUs[i].checked) {
			var CPUbox = CPUs[i].parentElement;
			var CPUpr = CPUbox.getElementsByClassName('price')[0].innerText;

		}
	}
	var GPUs = document.getElementsByClassName('GPU');
	for (var i = 0; i < GPUs.length; i++) {
		if (GPUs[i].checked) {
			var GPUbox = GPUs[i].parentElement;
			var GPUpr = GPUbox.getElementsByClassName('price')[0].innerText;

		}
	}
	var Storages = document.getElementsByClassName('Storage');
	for (var i = 0; i < Storages.length; i++) {
		if (Storages[i].checked) {
			var Storagebox = Storages[i].parentElement;
			var Storagepr = Storagebox.getElementsByClassName('price')[0].innerText;

		}
	}
	var RAMs = document.getElementsByClassName('RAM');
	for (var i = 0; i < RAMs.length; i++) {
		if (RAMs[i].checked) {
			var RAMbox = RAMs[i].parentElement;
			var RAMpr = RAMbox.getElementsByClassName('price')[0].innerText;
		}
	}
	var RAMAs = document.getElementsByClassName('Amount');
	for (var i = 0; i < RAMAs.length; i++) {
		if (RAMAs[i].checked) {
			var RAMAbox = RAMAs[i].parentElement;
			var RAMApr = RAMAbox.getElementsByClassName('price')[0].innerText;

		}
	}
	var names = document.getElementsByClassName('name');
	var Total = 0.00;
	for (var i = 0; i < names.length; i++) {
		var itemline = names[i].parentElement.parentElement;
		var priceline = itemline.getElementsByClassName('price')[0];
		var InnerPrice = priceline.innerText;
		if (names[i].innerText == 'Total') {
			priceline.innerText = Total;
		} else if (InnerPrice == '') {
			continue;
		} else {
			Total = (parseFloat(Total) + parseFloat(InnerPrice)).toFixed(2);
		}
	}
}

var ItemLines = document.getElementsByClassName('Item');

for (var i = 0; i < ItemLines.length; i++) {
	var ItemRow = ItemLines[i];
	var ItemPrice = ItemRow.getElementsByClassName('price');
	var ItemName = ItemRow.getElementsByClassName('name');
	var Itemdetail = ItemRow.getElementsByClassName('detail');

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
	updatePrice(name);
}
function UpdateList(name, detail, price) {
	//console.log("clicked",name);
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
			//console.log(names[i], priceline);
			priceline.innerText = price;
			detailline.innerText = detail;
		} else if (names[i].innerHTML == 'RAM') {
			//console.log(names[i]);
			var itemline = names[i].parentElement.parentElement;
			var priceline = itemline.getElementsByClassName('price')[0];
			var detailline = itemline.getElementsByClassName('detail')[0];
			if (name == 'RAM') {
				//console.log("you clicked RAM RAM/Ammount/Cart- ", RAMpr.innerText, RAMApr.innerText, priceline);
				priceline.innerText = RAMpr.innerText * RAMApr.innerText;
				detailline.innerText = RAMApr.innerText + " x " + RAMdt.innerText;
				//console.log("Totaling - ", priceline.innerText);
			} else if (name == 'Amount') {
				//console.log("you clicked amount RAM/Ammount/Cart- ", RAMpr.innerText, RAMApr.innerText, priceline);
				priceline.innerText = RAMpr.innerText * RAMApr.innerText;
				detailline.innerText = RAMApr.innerText + " x " + RAMdt.innerText;
				//console.log("Totaling - ", priceline.innerText);
			}
		}
	}
}