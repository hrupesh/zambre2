<style>
            #loading {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: fixed;
            display: block;
            opacity: 1;
            background-color: #fff;
            z-index: 99;
            text-align: center;
            }

            #loading-image {
            position: absolute;
            top: 35%;
            left: 40%;
            z-index: 100;
            }
        </style>

        <script src="<?php base_url(); ?>assets/js/jquery-2.2.4.js"></script>

        <div id="loading">
            <img id="loading-image" src="<?php base_url(); ?>product_images/preview.gif" alt="Loading..." />
        </div>

        <script language="javascript" type="text/javascript">
            $(window).load(function() {
            $('#loading').hide();
        });
        </script>