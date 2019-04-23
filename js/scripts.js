function validate(){
	var creditCard= document.getElementById('creditCard');
	var expYear= document.getElementById('expYear');
	var zip= document.getElementById('zip');

	var errorCC= document.getElementById('error-cc');
	var errorExpY= document.getElementById('error-expY');
	var errorZip= document.getElementById('error-zip');

	inputList=[creditCard, expYear, zip];

	errorList=[errorCC, errorExpY, errorZip];

	var count=0;

	for(var i=0; i<3; i++){
		if(!isANumber(inputList[i].value)){
			errorList[i].style.display='inline';
		}
		else{
			errorList[i].style.display='none';
			count++;
		}
	}


	if(count!=3){
		return false;
	}
	else
		return true;
}

function isANumber(str){
  return !/\D/.test(str);
}