function isPostcode(val) {
        var pattern = /^([A-Z]{1,2})([0-9R][0-9A-Z]{0,1})([0-9][ABD-HJLNP-UW-Z]{2})$/;
    if (pattern.test(val)) {
            return true;
    } else {
        return false;
    }
}

function isNumeric(val) {
        var pattern = /^\d+.?\d*$/;
    if (pattern.test(val)) {
            return true;
    } else {
        return false;
    }
}

function isInteger(val) {
        var pattern = /^\d+$/;
    if (pattern.test(val)) {
            return true;
    } else {
        return false;
    }
}

function checkCholesterol(theValue) {
    if (theValue=="")
    return "";
    var error="Cholesterol/HDL ratio: either leave blank or enter a number between 1.0 and 11.0.\n";
    if (!isNumeric(theValue)) {
    return error;
    }
    var dbl = parseFloat(theValue);
    if (dbl < 1.0 || dbl > 11.0) {
    return error;
    }
    return "";
}

function checkHBA1c(theValue) {
    var error="HBA1c: enter a number between 20 and 240\n";
    if (theValue=="") {
        return error;
    }
    if (!isNumeric(theValue)) {
        return error;
    }
    var dbl = parseFloat(theValue);
    if (dbl < 20.0 || dbl > 240.0) {
        return error;
    }
    return "";
}

function checkSystolicBloodPressure(theValue) {
    if (theValue=="")
    return "";
    var error="Systolic blood pressure: either leave blank or enter an integer between 70 and 210\n";
    if (!isInteger(theValue)) {
    return error;
    }
    var i = parseInt(theValue);
    if (i < 70 || i > 210) {
    return error;
    }
    return "";
}

function checkSBPStandardDev(theValue) {
    if (theValue=="")
    return "";
    var error="Standard deviation of SBP: either leave blank or enter a value between 0.0 and 40.0\n";
    if (!isNumeric(theValue)) {
        return error;
    }
    var dbl = parseFloat(theValue);
    if (dbl < 0.0 || dbl > 40.0) {
        return error;
    }
    return "";
}

function checkWeightAndHeight(weight, height) {
    var weightError="Weight: enter an integer between 40 and 180\n";
    var heightError="Height: enter an integer between 140 and 210\n";
    var onlyOneError="You have only entered one of height and weight:\nPlease enter both or leave both blank.";
    var error="";
    var weightErrorSet = false;
    var heightErrorSet = false;
    if (weight=="" && height=="") {
    return "";
    }
    if (weight=="" || height=="") {
    return onlyOneError;
    }
    if (!isInteger(weight)) {
    weightErrorSet = true;
    }
    if (!isInteger(height)) {
    heightErrorSet = true;
    }
    if (!weightErrorSet) {
      var i = parseInt(weight);
      if (i < 40 || i > 180) {
    weightErrorSet = true;
      }
    }
    if (!heightErrorSet) {
      var i = parseInt(height);
      if (i < 140 || i > 210) {
    heightErrorSet = true;
      }
    }
   if (heightErrorSet) {
     error += heightError;
   }
   if (weightErrorSet) {
     error += weightError;
   }
   return error;
}

function checkAge(theValue) {
    var error="Age: enter an integer between 25 and 84\n";
    if (!isInteger(theValue)) {
    return error;
    }
    var i = parseInt(theValue);
    if (i < 25 || i > 84) {
    return error;
    }
    return "";
}

function checkPostcode(theValue) {
    if (theValue=="")
    return "";
    var error="Postcode: the postcode is not recognised.  Please re-enter or leave blank.\n";
    theValue = theValue.replace(/\s/g, "");
    if (!isPostcode(theValue)) {
    return error;
    }
    return "";
}

function checkCalculatorForm(theForm) {
    var why = "";
    why += checkAge(theForm.age.value);
    theForm.postcode.value=theForm.postcode.value.toUpperCase();
    why += checkPostcode(theForm.postcode.value);
    why += checkCholesterol(theForm.rati.value);
    why += checkSystolicBloodPressure(theForm.sbp.value);
    why += checkSBPStandardDev(theForm.sbps5.value);
    why += checkWeightAndHeight(theForm.weight.value, theForm.height.value);
    // why += checkHBA1c(theForm.hba1c.value);
    if (why != "") {
       alert(why);
       return false;
    }
    return true;
}
