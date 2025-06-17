window.onload = function () {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    var captionText = document.getElementById("modalCaption");
    var images = document.getElementsByClassName("gallery-image");

    Array.from(images).forEach(function (img) {
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
    });

    document.getElementsByClassName("close-button")[0].onclick = function () {
        modal.style.display = "none";
    };
};
