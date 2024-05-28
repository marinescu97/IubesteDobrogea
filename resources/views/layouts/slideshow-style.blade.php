<style>
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2.0s;
        animation-name: fade;
        animation-duration: 2.0s;
        animation-fill-mode: forwards;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    #img-slide{
        width: 100%;
        height: 100%;
        object-fit:cover;
    }

    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: 0 auto;
    }

    .slideshow-container div{
        margin: 0 auto;
        width: 100%;
        height: 400px;
        text-align: right;
    }

    .mySlides {
        display: none;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        font-weight: bold;
        font-size: 25px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0,0,0, 0.5);
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }
</style>
