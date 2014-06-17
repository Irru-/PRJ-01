function check(form) 
			{
			var isChecked = false;
			var moreTen = false;
			var volg = true;
			var seats = 0;
			var chks = document.getElementsByName('stoel[]');
			if ( chks.checked == true) {
				isChecked = true;
			}
			else {
				for ( var i=0; i < chks.length; i++) {
					if ( chks[i].checked == true ) {
						isChecked = true;
						seats++;
						if (seats > 10){
						moreTen = true;
						break;
						}
					}
				}
			}
			if ( isChecked == false ) {
				alert("U heeft geen stoelen geselecteerd. Selecteer aub maximaal tien stoelen.");
				volg = false;
			}
			if ( moreTen == true) {
				alert("U heeft meer dan tien stoelen geselecteerd. Als u een grote reservering wilt plaatsen, neem dan aub contact met ons op.");
				volg = false;
			}
			return volg;
			}