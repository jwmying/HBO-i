<div id="linked-in-share-parent">
    <script>
        var parent = document.getElementById("linked-in-share-parent");
        var button = document.createElement("a");
        button.href = "https://www.linkedin.com/shareArticle?mini=true&url=" + window.location.href + "&title=" + document.querySelector("title").innerText;
        button.innerHTML = "<i class=\"lab la-linkedin-in\"></i>";
        button.target = "_blank";
        parent.appendChild(button);
    </script>    
</div>
