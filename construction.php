<?php

include('./templates/header.php');

?>
<style>
  .marco {
    padding: 16px;
  }

  table>td:first-child {
    font-size: 40px;
  }

  .cielo {
    width: 800px;
    height: 200px;
    margin: auto;
    background-color: #88c9f9;
  }

  .prado-verde {
    width: 800px;
    height: 40px;
    margin: auto;
    background-color: #5c913b;
    /* position: relative;
    top: -244px;
    left: -16px; */

  }

  .rio {
    width: 800px;
    height: 70px;
    margin: auto;
    background-color: #55acee;
    /* position: relative;
    top: -245px;
    left: -16px;
    z-index: 0; */
  }

  .carretera {
    width: 800px;
    height: 107px;
    margin: auto;
    background-color: #a1a1a1;
    /* position: relative;
    top: -245px;
    left: -16px;

     z-index: 0; */
  }

  .cable {
    width: 31%;
    height: 1px;
    background-color: black;
    transform: rotate(16.5deg);
    position: relative;
    top: -165px;
    left: 668px;
    z-index: 1;
  }

  .paisaje {
    font-size: 110px;
    position: relative;
    top: -438px;
    left: 1234px;
    z-index: 0;
  }



  .corazon {
    font-size: 20px;
    color: transparent;
    animation: neon 2s linear infinite;
    position: relative;
    top: -573px;
    left: 615px;
    z-index: 0;
  }

  .montana {
    font-size: 80px;
    position: relative;
    top: -320px;
    left: 566px;
    z-index: 0;
  }

  .autobus {
    font-size: 41px;
    animation: bus 10s linear infinite;
    /* position: relative;
    top: -502px;
    left: 700px;
    z-index: 0; */
  }

  .camping {
    font-size: 14px;
    /* position: relative;
    top: -640px;
    left: 184px;
    z-index: 0; */
  }

  .estacion_alta {
    font-size: 80px;
    position: relative;
    top: -619px;
    left: 607px;
    z-index: 1;
  }

  .estacion_baja {
    font-size: 80px;
    position: relative;
    top: -605px;
    left: 1223px;
    z-index: 1;
  }

  .cabina {
    font-size: 25px;
    animation: mover 15s linear infinite;
    position: relative;
    top: -552px;
    left: 1145px;
    z-index: 0;
  }

  @keyframes mover {
    0% {
      top: -552px;
      left: 1145px;
    }

    10% {
      top: -552px;
      left: 1145px;
    }

    40% {
      top: -700px;
      left: 650px;
    }

    50% {
      top: -700px;
      left: 650px;
    }

    100% {
      top: -552px;
      left: 1145px;
    }
  }

  @keyframes bus {
    0% {

      left: 700px;
      top: -502px;
    }

    10% {
      left: 700px;
      top: -502px;
    }

    45% {
      left: 0px;
      top: -502px;
    }

    60% {
      left: 0px;
      top: -502px;
    }

    100% {
      left: 700px;
      top: -502px;
    }
  }

  @keyframes neon {
    0% {
      text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;
    }

    50% {
      text-shadow: 0px 0px 0px red, 0 0 0px red, 0 0 0px darkred;
    }

    100% {
      text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;
    }

  }
</style>
<div class="w3-display-container w3-padding-24" style="height: 500px;">
  <div class="marco">
    <div class="cielo"></div>
    <div class="prado-verde"></div>
    <div class="rio"></div>
    <div class="carretera"></div>
    <div class="cable"></div>

    <div class="montana">&#x1f3d4;&#xfe0f; &#x1f3d4;&#xfe0f; &#x26f0;&#xfe0f;&#x1f3d4;&#xfe0f;&#x1f3d4;&#xfe0f; &#x26f0;&#xfe0f;&#x1f3d4;&#xfe0f;</div>
    <div class="paisaje">&#x1f3de;&#xfe0f;</div>
    <div class="corazon">&#x2665;&#xfe0f;</div>
    <div class="estacion_alta">&#x1f3e9;</div>


    <div class="cabina">&#x1f6a0;</div>
    <div class="estacion_baja">&#x1f3ec;</div>

    <div class="camping">&#x1f3d5;</div>
    <div class="autobus">&#x1f68e;</div>
  </div>
</div>
<div class="w3-container">
  <table class="w3-table w3-centered">

    <tr>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Casa en ruinas</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3da;&#xfe0f;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3da;&amp;#xfe0f;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Casa media</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3e0;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3e0;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Casa jardin</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3e1;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3e1;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f6a0;</td>
          </tr>
          <tr>
            <td>&amp;#x1f6a0;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular cabina</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f6a1;</td>
          </tr>
          <tr>
            <td>&amp;#x1f6a1;</td>
          </tr>
        </table>
      </td>

    </tr>

    <tr>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Centro comercial</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f6a1;</td>
          </tr>
          <tr>
            <td>&amp;#x1f6a1;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3ec;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3ec;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3e9;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3e9;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x26f0;&#xfe0f;</td>
          </tr>
          <tr>
            <td>&amp;#x26f0;&amp;#xfe0f;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x2665;&#xfe0f;</td>
          </tr>
          <tr>
            <td>&amp;#x2665;&amp;#xfe0f;</td>
          </tr>
        </table>
      </td>

    </tr>

    <tr>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x26f7;&#xfe0f;</td>
          </tr>
          <tr>
            <td>&amp;#x26f7;&amp;#xfe0f;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Centro comercial</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3c2;</td>
          </tr>
          <tr>
            <td> &amp;#x1f3c2;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3de;&#xfe0f;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3de;&amp;#xfe0f;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x26f4;</td>
          </tr>
          <tr>
            <td>&amp;#x26f4;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x26f5;</td>
          </tr>
          <tr>
            <td>&amp;#x26f5;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f30b;</td>
          </tr>
          <tr>
            <td>&amp;#x1f30b;</td>
          </tr>
        </table>
      </td>


      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f332;</td>
          </tr>
          <tr>
            <td>&amp;#x1f332;</td>
          </tr>
        </table>
      </td>


    </tr>

    <tr>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Centro comercial</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f333;</td>
          </tr>
          <tr>
            <td>&amp;#x1f333;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f334;</td>
          </tr>
          <tr>
            <td>&amp;#x1f334;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f335;</td>
          </tr>
          <tr>
            <td>&amp;#x1f335;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f384;</td>
          </tr>
          <tr>
            <td>&amp;#x1f384;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f3d5;</td>
          </tr>
          <tr>
            <td>&amp;#x1f3d5;</td>
          </tr>
        </table>
      </td>


      <td>
        <table class="w3-table-all">
          <tr>
            <td>Funicular grande</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f6f3;</td>
          </tr>
          <tr>
            <td> &amp;#x1f6f3;</td>
          </tr>
        </table>
      </td>


    </tr>

    <tr>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Centro comercial</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f68c;</td>
          </tr>
          <tr>
            <td> &amp;#x1f68c;</td>
          </tr>
        </table>
      </td>

      <td>
        <table class="w3-table-all">
          <tr>
            <td>Hotel amor</td>
          </tr>
          <tr>
            <td class="w3-xxxlarge">&#x1f68e;</td>
          </tr>
          <tr>
            <td>&amp;#x1f68e;</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
  </table>

</div>








<?php

include('./templates/footer.php');

?>