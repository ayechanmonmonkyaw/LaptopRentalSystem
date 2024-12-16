    function validation() {
        var p = document.f1.price.value;
        if (p <= 0) {
            alert("Price will not be less than zero or equal zero");
        } else if (p > 0 && p < 5000) {
            alert("Price will be 5000 or more than 5000");
        }
    }
