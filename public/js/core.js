function numberToCurrency(x) {
    var a = x.value;
    if ("" != a && null != a) {
        a = a.toString();

        a = a.replace(/[^\d\,]/g, "").split(",");
        for (var b = "", c = 0, d = a[0].length; 0 < d; d--)
            c += 1, b = 1 == c % 3 && 1 != c ? a[0].substr(d - 1, 1) + "." + b : a[0].substr(d - 1, 1) + b;
        1 < a.length && (b = 0 < a[1].length ? b + ("," + a[1]) : b + ",");
        $(x).val(b);
    }
    return"";
}
function numberToCurrencyIn(a) {
    if ("" != a && null != a) {
        a = a.toString();

        a = a.replace(/[^\d\,]/g, "").split(",");
        for (var b = "", c = 0, d = a[0].length; 0 < d; d--)
            c += 1, b = 1 == c % 3 && 1 != c ? a[0].substr(d - 1, 1) + "." + b : a[0].substr(d - 1, 1) + b;
        1 < a.length && (b = 0 < a[1].length ? b + ("," + a[1]) : b + ",");
        return b;
    }
    return"";
}
function parseNumber(a) {
    if ("" != a && null != a) {
        a = a.toString();
        a = a.replace(/[^\d\,]/g, "").split(",");
        for (var b = "", c = a[0].length; 0 < c; c--)
            b = a[0].substr(c - 1, 1) + b;
        1 < a.length && (b = 0 < a[1].length ? b + ("," + a[1]) : b + ",");
        $(a).val(b);
    }
    return"";
}
function currencyToNumber(a) {
    if (null != a || "" != a) {
        var a = a.toString();
        var c = a.replace(/\.+/g, "");
        return parseInt(c);
    }
}
function numberToCurrency2(a) {
    if (null == a || isNaN(a))
        return"";
    a = parseInt(a).toString();
    for (var b = "", c = 0, d = a.length; 0 < d; d--)
        c += 1, b = 1 == c % 3 && 1 != c ? a.substr(d - 1, 1) + "." + b : a.substr(d - 1, 1) + b;
    $(a).val(b);
}
function floatToCurrency(a) {
    if ("" != a && null != a) {
        a = a.toString();
        var b = a.replace(/[^\d\.]/g, "");
        a = a.split(".");
        return 1 < a.length ? (b = a[1].substr(0, 2), numberToCurrency2(a[0]) + "," + b) : numberToCurrency2(b)
    }
    return""
}