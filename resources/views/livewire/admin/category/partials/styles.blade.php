<style>
    ul.drag{
        width: 400px;
    }
    ul.drag h5{
        border: solid 1px #ddd;
        background-color: #EEE;
        text-align: left;
        padding: 10px;
        margin: auto;
        font-size: 16px;
        font-weight: normal;
    }
    ul.drag h5:hover{
        border-color: #ccc;
        background-color: #Eff;
    }

    ul.drag li{
        min-width: 250px;
        margin: 10px 0px 0px 10px;
        cursor: move;
    }

    ul.drag li ul{
        margin-left: 10px;
        min-width: 20px;
        width: 100%;
    }

    ul.drag li li.emptyLi{
        margin-left: -10px;
        width: 100%;
        height: 10px;
        margin-top: -11px;
        /*background-color: #ddd;*/
        margin-bottom: 10px;
        cursor: auto;
    }

    ul.drag li span:hover{
        cursor: auto;
        padding: 5px 20px;
    }
    ul.drag li span{
        position: relative;
        padding: 5px 20px;
        margin-right: -20px;
    }
    .gu-transit {
        pointer-events: none !important;
    }

    .drag .actions{
        position: absolute;
        right: -100px;
        bottom: -8px;
        display: none;
        padding-left: 50px;
    }

    ul.drag h5:hover>span>.actions{
        display: flex;
    }

    ul.drag .actions:hover{
        display: flex;
    }




</style>
