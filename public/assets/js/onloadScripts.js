window.onload = function() {
    let customDates = document.getElementsByClassName('created-date');
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0');
    let yyyy = today.getFullYear();
    for (let i = 0; i < customDates.length; i++) {
        let customDate = new Date(customDates[i].innerHTML);
        let month = (customDate.getMonth() + 1).toString().padStart(2, '0');
        let day = customDate.getDate().toString().padStart(2, '0');
        let year = customDate.getFullYear();
        let hour = (customDate.getHours().toString() < 10)
            ? 0 + customDate.getHours().toString() : customDate.getHours().toString();
        let minute = (customDate.getMinutes().toString() < 10)
            ? 0 + customDate.getMinutes().toString() : customDate.getMinutes().toString();
        let second = (customDate.getSeconds().toString() < 10)
            ? 0 + customDate.getSeconds().toString() : customDate.getSeconds().toString();
        if (dd + mm + yyyy === day + month + year) {
            document.getElementsByClassName('created-date')[i].innerHTML =
                'Today ' + hour + ':' + minute + ':' + second;
        } else if ((dd-1) + mm + yyyy === day + month + year) {
            document.getElementsByClassName('created-date')[i].innerHTML =
                'Yesterday ' + hour + ':' + minute + ':' + second;
        } else {
            document.getElementsByClassName('created-date')[i].innerHTML =
                day + "/" + month + "/" + year + ' ' + hour + ':' + minute + ':' + second;
        }
    }

    let descriptionText = document.getElementsByClassName('recent-type');
    for (let i=0; i<descriptionText.length; i++) {
        document.getElementsByClassName('recent-type')[i].innerHTML =
            descriptionText[i].innerHTML.replace('_', ' ');
    }
}
