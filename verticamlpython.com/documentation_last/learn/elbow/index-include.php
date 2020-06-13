<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="elbow">elbow<a class="anchor-link" href="#elbow">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">elbow</span><span class="p">(</span><span class="n">X</span><span class="p">:</span> <span class="nb">list</span><span class="p">,</span>
      <span class="n">input_relation</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span>
      <span class="n">cursor</span> <span class="o">=</span> <span class="kc">None</span><span class="p">,</span>
      <span class="n">n_cluster</span> <span class="o">=</span> <span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">15</span><span class="p">),</span>
      <span class="n">init</span> <span class="o">=</span> <span class="s2">&quot;kmeanspp&quot;</span><span class="p">,</span>
      <span class="n">max_iter</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">50</span><span class="p">,</span>
      <span class="n">tol</span><span class="p">:</span> <span class="nb">float</span> <span class="o">=</span> <span class="mf">1e-4</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Draws the Elbow Curve.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">X</div></td> <td><div class="type">list</div></td> <td><div class = "no">&#10060;</div></td> <td>List of the predictor columns.</td> </tr>
    <tr> <td><div class="param_name">input_relation</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Relation used to train the model.</td> </tr>
    <tr> <td><div class="param_name">cursor</div></td> <td><div class="type">DBcursor</div></td> <td><div class = "yes">&#10003;</div></td> <td>Vertica DB cursor.</td> </tr>
    <tr> <td><div class="param_name">n_cluster</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Tuple representing the number of cluster to start with and to end with. It can also be customized list with the different K to test.</td> </tr>
    <tr> <td><div class="param_name">init</div></td> <td><div class="type">str / list</div></td> <td><div class = "yes">&#10003;</div></td> <td>The method used to find the initial cluster centers. <br> <ul><li><b>kmeanspp</b> : Uses the KMeans++ method to initialize the centers.</li><li><b>random</b> : The initial centers.</li></ul>It can be also a list with the initial cluster centers to use.</td> </tr>
    <tr> <td><div class="param_name">max_iter</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>The maximum number of iterations the algorithm performs.</td> </tr>
    <tr> <td><div class="param_name">tol</div></td> <td><div class="type">float</div></td> <td><div class = "yes">&#10003;</div></td> <td>Determines whether the algorithm has converged. The algorithm is considered converged after no center has moved more than a distance of 'tol' from the previous iteration. </td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><a href="../../utilities/tablesample/index.php">tablesample</a> : An object containing the result. For more information, check out <a href="../../utilities/tablesample/index.php">utilities.tablesample</a>.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.plot</span> <span class="k">import</span> <span class="n">elbow</span>
<span class="n">elbow</span><span class="p">(</span><span class="n">X</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;PetalLengthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;PetalWidthCm&quot;</span><span class="p">],</span>
      <span class="n">input_relation</span> <span class="o">=</span> <span class="s2">&quot;public.iris&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Within-Cluster SS</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.8430854905080415</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.9429226137921877</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.9631049651782849</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>5</b></td><td style="border: 1px solid white;">0.9744220157554943</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>6</b></td><td style="border: 1px solid white;">0.9770344684192842</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>7</b></td><td style="border: 1px solid white;">0.9832895866357955</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>8</b></td><td style="border: 1px solid white;">0.9848046322968291</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>9</b></td><td style="border: 1px solid white;">0.9838784794814692</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>10</b></td><td style="border: 1px solid white;">0.9896306043545745</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>11</b></td><td style="border: 1px solid white;">0.9905347828786565</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>12</b></td><td style="border: 1px solid white;">0.9912016753780808</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>13</b></td><td style="border: 1px solid white;">0.9920554038350804</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>14</b></td><td style="border: 1px solid white;">0.9919902437052418</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[7]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>