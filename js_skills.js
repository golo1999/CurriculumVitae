modificareInaltimeElement();

function modificareInaltimeElement()
{
    let inaltimeDivNumeLimbaj=window.getComputedStyle(document.getElementById("randHTML"), null).getPropertyValue("height");

    document.getElementById("randHTMLProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randCSSProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randJSProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randjQueryProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randNodeJSProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randJavaProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randPHPProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randSQLProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randCProcentaj").style.height=inaltimeDivNumeLimbaj;
    document.getElementById("randCPPProcentaj").style.height=inaltimeDivNumeLimbaj;
}