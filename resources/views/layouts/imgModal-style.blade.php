<style>
    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    .container {
        position: relative;
    }

    .anuntSlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 16.66%;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
</style>
