<div style="position: fixed; right: 0; top: 100px; display: flex;flex-direction: column; z-index: 95;">
    <button onclick="large_font()" type="button" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
        </svg>
    </button>
    <button onclick="normal_font()" type="button" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
        </svg>
    </button>
</div>
<script>
    const array = ["p","h1","h2","h3","h4","h5","h6","label","button","td","th"]
    const classes = ["ccm-block-page-list-title", "ccm-block-page-list-description", "ccm-block-page-list-read-more"]
    const menu = document.querySelectorAll("li>a")
    const scale = 1.4;

    var exp_data = new Date();
    exp_data.setTime(exp_data.getTime() + (6 * 3600 * 1000) + (60 * 60 * 1000));

    function large_font() {
        if(parseInt(document.getElementsByTagName("body")[0].getAttribute("large-font")) == 0) {
            for (item of array) {
                let tags = document.getElementsByTagName(item);
                for (tag of tags) {
                    let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
                    tag.style.fontSize = size * scale + "px";
                }
            }
            for (item of classes) {
                let tags = document.getElementsByClassName(item);
                for (tag of tags) {
                    let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
                    tag.style.fontSize = size * scale + "px";
                }
            }
            for (tag of menu) {
                let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
                tag.style.fontSize = size * scale + "px";
                tag.style.fontWeight = "bold";
            }
            document.getElementsByTagName("body")[0].setAttribute("large-font", "1")
            document.cookie = 'large-font=1; expires='+exp_data.toUTCString()+'; path=/';
        }
        else if(parseInt(document.getElementsByTagName("body")[0].getAttribute("large-font")) == 1) {
            alert("Czcionka już ma DUŻY rozmiar!")
        }
    }

    function normal_font() {
        if(parseInt(document.getElementsByTagName("body")[0].getAttribute("large-font")) == 1){
            document.cookie = 'large-font=0; expires='+exp_data.toUTCString()+'; path=/';
            window.location.reload();
        }
        else{
            alert("Czcionka już ma MAŁY rozmiar!")
        }
    }

    if(parseInt(document.getElementsByTagName("body")[0].getAttribute("large-font")) == 1) {
        for (item of array) {
            let tags = document.getElementsByTagName(item);
            for (tag of tags) {
                let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
                tag.style.fontSize = size * scale + "px";
            }
        }
        for (item of classes) {
            let tags = document.getElementsByClassName(item);
            for (tag of tags) {
                let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
                tag.style.fontSize = size * scale + "px";
            }
        }

        for (tag of menu) {
            let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
            tag.style.fontSize = size * scale + "px";
            tag.style.fontWeight = "bold";
        }
    }

</script>