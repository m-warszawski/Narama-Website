<script>
    // COOKIES
    function setCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else{
            var expires = "";
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0){
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    }

</script>


<script>
    //    FONT SIZE
    const array = ["p","h1","h2","h3","h4","h5","h6","label","button","td","th"]
    const classes = ["ccm-block-page-list-title", "ccm-block-page-list-description", "ccm-block-page-list-read-more"]
    const menu = document.querySelectorAll("li>a")
    const scale = 1.4;

    function resize(tag, state){
        let size = window.getComputedStyle(tag, null).getPropertyValue('font-size').slice(0, -2);
        if(state == 1) {
            tag.style.fontSize = size * scale + "px";
        }
        else{
            tag.style.fontSize = size / scale + "px";
        }
    }

    function change_size(){
        let state = 1;
        if(parseInt(getCookie("large-font")) == 1) {
            state = 0;
        }
        else{
            state = 1;
        }

        // Resize HTML elements
        for (item of array) {
            let tags = document.getElementsByTagName(item);
            for (tag of tags) {
                resize(tag, state)
            }
        }
        for (item of classes) {
            let tags = document.getElementsByClassName(item);
            for (tag of tags) {
                resize(tag, state)
            }
        }
        for (tag of menu) {
            resize(tag, state)
            tag.style.fontWeight = "bold";
        }

        // Cookies setting
        setCookie("large-font", state, 1)

        // Icon picture
        document.getElementById("font_size").innerHTML="";
        let img = document.createElement("img");
        if (state == 1) {
            img.src = "/concrete/themes/elemental/images/smaller_icon.svg";
        }
        else{
            img.src = "/concrete/themes/elemental/images/bigger_icon.svg";
        }
        document.getElementById("font_size").appendChild(img)
    }

    // Onload
    if(parseInt(getCookie("large-font")) == 1) {
        setCookie("large-font", 0, 1)
        change_size()
    }

</script>

<script>
    // PAGE LIST MOBILE
    function mobile_page(){
        if(window.screen.width < 700) {
            // Page List
            let list_item = document.getElementsByClassName("ccm-block-page-list-description");
            for (let tag of list_item) {
                let content = tag.innerText.split(" ")
                let text = ""
                if(content.length != 1){
                    for(let i=0; i<20; i++){
                        text += content[i] + " ";
                    }
                    text += " ...";
                }
                tag.innerText = text;
            }
        }
    }

    window.onresize = mobile_page;
    mobile_page()
</script>

<script>
    // DARK MODE
    function change_theme(){
        if(parseInt(getCookie("dark-mode")) == 1){
            change_mode("light")
        }
        else{
            change_mode("dark");
        }
    }

    function change_mode(mode){
        let main = document.getElementsByTagName("main")[0];
        let resp_menu = document.getElementsByClassName("ccm-responsive-overlay")[0];
        let footer = document.querySelector("footer#footer-theme section:first-child");
        let footer_title = document.getElementById("footer-site-title");
        let footer_links = document.querySelectorAll("footer#footer-theme div.ccm-block-social-links ul a");
        let form_controls = document.querySelectorAll(".form-control")
        let span_form = document.querySelectorAll(".text-muted");
        let h1_array = document.getElementsByTagName("h1");
        let h3_array = document.getElementsByTagName("h3");
        let h4_array = document.getElementsByTagName("h4");
        let blockquote_array = document.getElementsByTagName("blockquote");
        let sliders = document.getElementsByClassName("ccm-image-slider-container");
        if(mode=="dark"){
            main.style.backgroundColor="#2D2F33";
            main.style.color="#ffffff";
            resp_menu.style.backgroundColor="#31363B";
            footer.style.backgroundColor="#202124";
            footer_title.style.color="#BABABA";

            for (h1 of h1_array){
                h1.style.color="#FF3842";
            }
            for (h3 of h3_array){
                h3.style.color="#ffffff";
            }
            for (h4 of h4_array){
                h4.style.color="#91A1A8";
            }
            for (a of footer_links){
                a.style.color="#BABABA"
            }
            for (blockquote of blockquote_array){
                blockquote.style.color="#ADB4B8";
            }
            for (input of form_controls){
                input.style.backgroundColor="#E6E6E6";
            }
            for (span of span_form){
                span.style.color="#C4C4C4";
            }
            for (slider of sliders){
                slider.style.backgroundImage="url(/concrete/themes/elemental/images/background-slider-dark.png)"
            }
            setCookie('dark-mode', 1, 1);
        }
        else{
            main.style.backgroundColor="#ffffff";
            main.style.color="#333333";
            resp_menu.style.backgroundColor="white";
            footer.style.backgroundColor="#f3f3f3";
            footer_title.style.color="#6d6d6d";

            for (h1 of h1_array){
                h1.style.color="#bd161d";
            }
            for (h3 of h3_array){
                h3.style.color ="#000000";
            }
            for (h4 of h4_array){
                h4.style.color="#4F585C";
            }
            for (a of footer_links){
                a.style.color="#6d6d6d";
            }
            for (blockquote of blockquote_array){
                blockquote.style.color="#5B676C";
            }
            for (input of form_controls){
                input.style.backgroundColor="#ffffff";
            }
            for (span of span_form){
                span.style.color="#777777";
            }
            for (slider of sliders){
                slider.style.backgroundImage="url(/concrete/themes/elemental/images/background-slider-default.png)"
            }
            setCookie('dark-mode', 0, 1);
        }
    }

    if(parseInt(getCookie("dark-mode")) == 1) {
        change_mode("dark")
    }
</script>

<script>
    // SCROLL TOP BUTTON
    let top_button = document.getElementById("btn-back-to-top");

    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            top_button.style.display = "block";
        } else {
            top_button.style.display = "none";
        }
    }
    top_button.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>