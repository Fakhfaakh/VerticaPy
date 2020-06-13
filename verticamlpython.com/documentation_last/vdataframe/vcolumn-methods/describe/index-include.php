<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame[].describe">vDataFrame[].describe<a class="anchor-link" href="#vDataFrame[].describe">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="p">[]</span><span class="o">.</span><span class="n">describe</span><span class="p">(</span><span class="n">method</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">,</span> 
                      <span class="n">max_cardinality</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">6</span><span class="p">,</span>
                      <span class="n">numcol</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Aggregates the vcolumn using multiple statistical aggregations: min, max, median, unique... depending on the input method.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">method</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>The describe method.<br>
                                                    <ul>
                                                        <li><b>auto :</b> Sets the method to 'numerical' if the vcolumn is numerical, 'categorical' otherwise.</li>
                                                        <li><b>categorical :</b> Uses only categorical aggregations during the computation.</li>
                                                        <li><b>cat_stats :</b> Computes statistics of a numerical column for each vcolumn category. In this case, the parameter 'numcol' must be defined.</li>
                                                        <li><b>numerical :</b> Uses popular numerical aggregations during the computation.</li>
                                                    </ul></td> </tr>
    <tr> <td><div class="param_name">max_cardinality</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Cardinality threshold used to determine if the vcolumn will be considered as categorical.</td> </tr>
    <tr> <td><div class="param_name">numcol</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Numerical vcolumn to use when the parameter method is set to 'cat_stats'.</td> </tr>
</table>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><a href="../../../utilities/tablesample/index.php">tablesample</a> : An object containing the result. For more information, check out <a href="../../../utilities/tablesample/index.php">utilities.tablesample</a>.</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[4]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_market</span>
<span class="n">market</span> <span class="o">=</span> <span class="n">load_market</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">market</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Form</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Price</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Name</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">Fresh</td><td style="border: 1px solid white;">1.1193087167</td><td style="border: 1px solid white;">Acorn squash</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">Fresh</td><td style="border: 1px solid white;">1.1722478842</td><td style="border: 1px solid white;">Acorn squash</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">Fresh</td><td style="border: 1px solid white;">1.56751539145</td><td style="border: 1px solid white;">Apples</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">Fresh</td><td style="border: 1px solid white;">1.6155336441</td><td style="border: 1px solid white;">Apples</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">Frozen</td><td style="border: 1px solid white;">0.5104657455</td><td style="border: 1px solid white;">Apples</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: market, Number of rows: 314, Number of columns: 3
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">market</span><span class="p">[</span><span class="s2">&quot;Price&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">describe</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;numerical&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>value</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>name</b></td><td style="border: 1px solid white;">"Price"</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>dtype</b></td><td style="border: 1px solid white;">float</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>unique</b></td><td style="border: 1px solid white;">308.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>count</b></td><td style="border: 1px solid white;">314</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>mean</b></td><td style="border: 1px solid white;">2.07751098603612</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>std</b></td><td style="border: 1px solid white;">1.51037749575861</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>min</b></td><td style="border: 1px solid white;">0.3166387792</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>25%</b></td><td style="border: 1px solid white;">1.072761874325</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>50%</b></td><td style="border: 1px solid white;">1.566898080825</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>75%</b></td><td style="border: 1px solid white;">2.60376599205</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>max</b></td><td style="border: 1px solid white;">10.1637125484</td></tr></table>
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
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[10]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Only the count of the 3 most occurent categories will be displayed</span>
<span class="n">market</span><span class="p">[</span><span class="s2">&quot;Form&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">describe</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;categorical&quot;</span><span class="p">,</span>
                        <span class="n">max_cardinality</span> <span class="o">=</span> <span class="mi">3</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>value</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>name</b></td><td style="border: 1px solid white;">"Form"</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>dtype</b></td><td style="border: 1px solid white;">varchar(32)</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>unique</b></td><td style="border: 1px solid white;">37.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh</b></td><td style="border: 1px solid white;">90</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Others</b></td><td style="border: 1px solid white;">90</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Frozen</b></td><td style="border: 1px solid white;">57</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Canned</b></td><td style="border: 1px solid white;">47</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[10]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[11]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Statistics of &#39;Price&#39; partitioned by &#39;Form&#39; </span>
<span class="n">market</span><span class="p">[</span><span class="s2">&quot;Form&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">describe</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;cat_stats&quot;</span><span class="p">,</span> 
                        <span class="n">numcol</span> <span class="o">=</span> <span class="s2">&quot;Price&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>count</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>percent</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>mean</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>std</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>min</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>10%</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>25%</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>50%</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>75%</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>90%</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>max</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Beefsteak,</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.318471337579617834</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">nan</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td><td style="border: 1px solid white;">3.15921213872</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Boiled</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.830154965845</td><td style="border: 1px solid white;">0.0050356546423244</td><td style="border: 1px solid white;">3.8265942203</td><td style="border: 1px solid white;">3.827306369409</td><td style="border: 1px solid white;">3.8283745930725</td><td style="border: 1px solid white;">3.830154965845</td><td style="border: 1px solid white;">3.8319353386175</td><td style="border: 1px solid white;">3.833003562281</td><td style="border: 1px solid white;">3.83371571139</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Canned</b></td><td style="border: 1px solid white;">47</td><td style="border: 1px solid white;">14.968152866242038217</td><td style="border: 1px solid white;">1.1649022634076</td><td style="border: 1px solid white;">0.595638890885002</td><td style="border: 1px solid white;">0.7843472032</td><td style="border: 1px solid white;">0.8428270506668</td><td style="border: 1px solid white;">0.902851046936</td><td style="border: 1px solid white;">0.965253514158</td><td style="border: 1px solid white;">1.12269898745</td><td style="border: 1px solid white;">1.38030526322</td><td style="border: 1px solid white;">3.38561047493</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Canned,</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">4.63647686809</td><td style="border: 1px solid white;">0.635894274349174</td><td style="border: 1px solid white;">4.18683171458</td><td style="border: 1px solid white;">4.276760745282</td><td style="border: 1px solid white;">4.411654291335</td><td style="border: 1px solid white;">4.63647686809</td><td style="border: 1px solid white;">4.861299444845</td><td style="border: 1px solid white;">4.996192990898</td><td style="border: 1px solid white;">5.0861220216</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Canned, packed in syrup or water</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.622330820065</td><td style="border: 1px solid white;">0.146494766407389</td><td style="border: 1px solid white;">3.51874337733</td><td style="border: 1px solid white;">3.539460865877</td><td style="border: 1px solid white;">3.5705370986975</td><td style="border: 1px solid white;">3.622330820065</td><td style="border: 1px solid white;">3.6741245414325</td><td style="border: 1px solid white;">3.705200774253</td><td style="border: 1px solid white;">3.7259182628</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Cooked whole</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">0.7576457039395</td><td style="border: 1px solid white;">0.0227769157205302</td><td style="border: 1px solid white;">0.741539992379</td><td style="border: 1px solid white;">0.7447611346911</td><td style="border: 1px solid white;">0.74959284815925</td><td style="border: 1px solid white;">0.7576457039395</td><td style="border: 1px solid white;">0.76569855971975</td><td style="border: 1px solid white;">0.7705302731879</td><td style="border: 1px solid white;">0.7737514155</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Dried</b></td><td style="border: 1px solid white;">30</td><td style="border: 1px solid white;">9.554140127388535032</td><td style="border: 1px solid white;">3.711283795031</td><td style="border: 1px solid white;">2.60822802642759</td><td style="border: 1px solid white;">1.085109083</td><td style="border: 1px solid white;">1.40199224367</td><td style="border: 1px solid white;">1.5408802667725</td><td style="border: 1px solid white;">1.975096291315</td><td style="border: 1px solid white;">5.5080500887675</td><td style="border: 1px solid white;">7.371265288069</td><td style="border: 1px solid white;">10.1637125484</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Dried (Prunes)</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">4.38513566562</td><td style="border: 1px solid white;">0.493264261155465</td><td style="border: 1px solid white;">4.03634516164</td><td style="border: 1px solid white;">4.106103262436</td><td style="border: 1px solid white;">4.21074041363</td><td style="border: 1px solid white;">4.38513566562</td><td style="border: 1px solid white;">4.55953091761</td><td style="border: 1px solid white;">4.664168068804</td><td style="border: 1px solid white;">4.7339261696</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Florets</b></td><td style="border: 1px solid white;">4</td><td style="border: 1px solid white;">1.273885350318471338</td><td style="border: 1px solid white;">2.83238728437</td><td style="border: 1px solid white;">0.435863589578331</td><td style="border: 1px solid white;">2.3624557989</td><td style="border: 1px solid white;">2.424260489439</td><td style="border: 1px solid white;">2.5169675252475</td><td style="border: 1px solid white;">2.848222451715</td><td style="border: 1px solid white;">3.1636422108375</td><td style="border: 1px solid white;">3.227845945425</td><td style="border: 1px solid white;">3.27064843515</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh</b></td><td style="border: 1px solid white;">90</td><td style="border: 1px solid white;">28.662420382165605096</td><td style="border: 1px solid white;">2.0580829673886</td><td style="border: 1px solid white;">1.3097843628429</td><td style="border: 1px solid white;">0.3166387792</td><td style="border: 1px solid white;">0.6502812872536</td><td style="border: 1px solid white;">1.1824457705325</td><td style="border: 1px solid white;">1.794282245305</td><td style="border: 1px solid white;">2.6144100355475</td><td style="border: 1px solid white;">3.21868987291</td><td style="border: 1px solid white;">6.97581079886</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh green cabbage</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">0.601539811679</td><td style="border: 1px solid white;">0.0315813933837907</td><td style="border: 1px solid white;">0.579208394258</td><td style="border: 1px solid white;">0.5836746777422</td><td style="border: 1px solid white;">0.5903741029685</td><td style="border: 1px solid white;">0.601539811679</td><td style="border: 1px solid white;">0.6127055203895</td><td style="border: 1px solid white;">0.6194049456158</td><td style="border: 1px solid white;">0.6238712291</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh red cabbage</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.040287378205</td><td style="border: 1px solid white;">0.0228570141526365</td><td style="border: 1px solid white;">1.0241250285</td><td style="border: 1px solid white;">1.027357498441</td><td style="border: 1px solid white;">1.0322062033525</td><td style="border: 1px solid white;">1.040287378205</td><td style="border: 1px solid white;">1.0483685530575</td><td style="border: 1px solid white;">1.053217257969</td><td style="border: 1px solid white;">1.05644972791</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh, consumed with peel</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.27575847412</td><td style="border: 1px solid white;">0.0285287803154144</td><td style="border: 1px solid white;">1.2555855801</td><td style="border: 1px solid white;">1.259620158904</td><td style="border: 1px solid white;">1.26567202711</td><td style="border: 1px solid white;">1.27575847412</td><td style="border: 1px solid white;">1.28584492113</td><td style="border: 1px solid white;">1.291896789336</td><td style="border: 1px solid white;">1.29593136814</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Fresh, peeled</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.27575847412</td><td style="border: 1px solid white;">0.0285287803154144</td><td style="border: 1px solid white;">1.2555855801</td><td style="border: 1px solid white;">1.259620158904</td><td style="border: 1px solid white;">1.26567202711</td><td style="border: 1px solid white;">1.27575847412</td><td style="border: 1px solid white;">1.28584492113</td><td style="border: 1px solid white;">1.291896789336</td><td style="border: 1px solid white;">1.29593136814</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Frozen</b></td><td style="border: 1px solid white;">57</td><td style="border: 1px solid white;">18.152866242038216561</td><td style="border: 1px solid white;">2.19253958499914</td><td style="border: 1px solid white;">1.4220758283626</td><td style="border: 1px solid white;">0.5104657455</td><td style="border: 1px solid white;">0.6838963431082</td><td style="border: 1px solid white;">1.47304331307</td><td style="border: 1px solid white;">1.71622542952</td><td style="border: 1px solid white;">2.6115889333</td><td style="border: 1px solid white;">3.99499239038</td><td style="border: 1px solid white;">6.22141832776</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Frozen french fries</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.19722809107</td><td style="border: 1px solid white;">0.0289791581345278</td><td style="border: 1px solid white;">1.17673673184</td><td style="border: 1px solid white;">1.180835003686</td><td style="border: 1px solid white;">1.186982411455</td><td style="border: 1px solid white;">1.19722809107</td><td style="border: 1px solid white;">1.207473770685</td><td style="border: 1px solid white;">1.213621178454</td><td style="border: 1px solid white;">1.2177194503</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Full Heads</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.660066592085</td><td style="border: 1px solid white;">0.248946451608926</td><td style="border: 1px solid white;">1.484034868</td><td style="border: 1px solid white;">1.519241212817</td><td style="border: 1px solid white;">1.5720507300425</td><td style="border: 1px solid white;">1.660066592085</td><td style="border: 1px solid white;">1.7480824541275</td><td style="border: 1px solid white;">1.800891971353</td><td style="border: 1px solid white;">1.83609831617</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Grape and cherry,</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.386044798935</td><td style="border: 1px solid white;">0.137298351321261</td><td style="border: 1px solid white;">3.28896020367</td><td style="border: 1px solid white;">3.308377122723</td><td style="border: 1px solid white;">3.3375025013025</td><td style="border: 1px solid white;">3.386044798935</td><td style="border: 1px solid white;">3.4345870965675</td><td style="border: 1px solid white;">3.463712475147</td><td style="border: 1px solid white;">3.4831293942</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Heads</b></td><td style="border: 1px solid white;">4</td><td style="border: 1px solid white;">1.273885350318471338</td><td style="border: 1px solid white;">1.550249242225</td><td style="border: 1px solid white;">0.296939263295378</td><td style="border: 1px solid white;">1.22881085623</td><td style="border: 1px solid white;">1.285259222461</td><td style="border: 1px solid white;">1.3699317718075</td><td style="border: 1px solid white;">1.526534491735</td><td style="border: 1px solid white;">1.7068519621525</td><td style="border: 1px solid white;">1.834211062381</td><td style="border: 1px solid white;">1.9191171292</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Hearts</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">2.653314584035</td><td style="border: 1px solid white;">0.140980565011309</td><td style="border: 1px solid white;">2.5536262705</td><td style="border: 1px solid white;">2.573563933207</td><td style="border: 1px solid white;">2.6034704272675</td><td style="border: 1px solid white;">2.653314584035</td><td style="border: 1px solid white;">2.7031587408025</td><td style="border: 1px solid white;">2.733065234863</td><td style="border: 1px solid white;">2.75300289757</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Juice, ready to drink</b></td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">1.592356687898089172</td><td style="border: 1px solid white;">1.880649400672</td><td style="border: 1px solid white;">1.02261447851835</td><td style="border: 1px solid white;">0.8494909232</td><td style="border: 1px solid white;">0.97187426266</td><td style="border: 1px solid white;">1.15544927185</td><td style="border: 1px solid white;">1.4452477587</td><td style="border: 1px solid white;">2.94278510731</td><td style="border: 1px solid white;">2.983278408304</td><td style="border: 1px solid white;">3.0102739423</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Large round,</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.318471337579617834</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">nan</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td><td style="border: 1px solid white;">2.0066199543</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Packed in juice</b></td><td style="border: 1px solid white;">10</td><td style="border: 1px solid white;">3.184713375796178344</td><td style="border: 1px solid white;">1.592047339472</td><td style="border: 1px solid white;">0.276362085872738</td><td style="border: 1px solid white;">1.14342311575</td><td style="border: 1px solid white;">1.262846143585</td><td style="border: 1px solid white;">1.42523277745</td><td style="border: 1px solid white;">1.568821415055</td><td style="border: 1px solid white;">1.8328037811875</td><td style="border: 1px solid white;">1.888501493631</td><td style="border: 1px solid white;">1.96460660811</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Packed in syrup or water</b></td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">2.547770700636942675</td><td style="border: 1px solid white;">1.41017352542375</td><td style="border: 1px solid white;">0.188283136462026</td><td style="border: 1px solid white;">1.12844843614</td><td style="border: 1px solid white;">1.206155196971</td><td style="border: 1px solid white;">1.2554976509675</td><td style="border: 1px solid white;">1.432312637015</td><td style="border: 1px solid white;">1.57530559675</td><td style="border: 1px solid white;">1.599425325235</td><td style="border: 1px solid white;">1.63007957295</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Packed in syrup, syrup discarded</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.70366667044</td><td style="border: 1px solid white;">0.214428912851844</td><td style="border: 1px solid white;">1.55204253208</td><td style="border: 1px solid white;">1.582367359752</td><td style="border: 1px solid white;">1.62785460126</td><td style="border: 1px solid white;">1.70366667044</td><td style="border: 1px solid white;">1.77947873962</td><td style="border: 1px solid white;">1.824965981128</td><td style="border: 1px solid white;">1.8552908088</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Raisins</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.538290033495</td><td style="border: 1px solid white;">0.0528567963134104</td><td style="border: 1px solid white;">3.50091463439</td><td style="border: 1px solid white;">3.508389714211</td><td style="border: 1px solid white;">3.5196023339425</td><td style="border: 1px solid white;">3.538290033495</td><td style="border: 1px solid white;">3.5569777330475</td><td style="border: 1px solid white;">3.568190352779</td><td style="border: 1px solid white;">3.5756654326</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Raw</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.830154965845</td><td style="border: 1px solid white;">0.0050356546423244</td><td style="border: 1px solid white;">3.8265942203</td><td style="border: 1px solid white;">3.827306369409</td><td style="border: 1px solid white;">3.8283745930725</td><td style="border: 1px solid white;">3.830154965845</td><td style="border: 1px solid white;">3.8319353386175</td><td style="border: 1px solid white;">3.833003562281</td><td style="border: 1px solid white;">3.83371571139</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Raw baby</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.44238764128</td><td style="border: 1px solid white;">0.00717063902494663</td><td style="border: 1px solid white;">1.4373172338</td><td style="border: 1px solid white;">1.438331315296</td><td style="border: 1px solid white;">1.43985243754</td><td style="border: 1px solid white;">1.44238764128</td><td style="border: 1px solid white;">1.44492284502</td><td style="border: 1px solid white;">1.446443967264</td><td style="border: 1px solid white;">1.44745804876</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Raw whole</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">0.7576457039395</td><td style="border: 1px solid white;">0.0227769157205302</td><td style="border: 1px solid white;">0.741539992379</td><td style="border: 1px solid white;">0.7447611346911</td><td style="border: 1px solid white;">0.74959284815925</td><td style="border: 1px solid white;">0.7576457039395</td><td style="border: 1px solid white;">0.76569855971975</td><td style="border: 1px solid white;">0.7705302731879</td><td style="border: 1px solid white;">0.7737514155</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Ready to drink</b></td><td style="border: 1px solid white;">9</td><td style="border: 1px solid white;">2.866242038216560510</td><td style="border: 1px solid white;">0.829661001553667</td><td style="border: 1px solid white;">0.103203179629046</td><td style="border: 1px solid white;">0.6311325278</td><td style="border: 1px solid white;">0.708056676044</td><td style="border: 1px solid white;">0.796288571647</td><td style="border: 1px solid white;">0.8455769036</td><td style="border: 1px solid white;">0.909642229515</td><td style="border: 1px solid white;">0.9251872040504</td><td style="border: 1px solid white;">0.9717956757</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Roma and plum,</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.318471337579617834</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">nan</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td><td style="border: 1px solid white;">1.2921776573</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Roma,</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.318471337579617834</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">nan</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td><td style="border: 1px solid white;">1.24341736034</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Sauerkraut</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.208865437055</td><td style="border: 1px solid white;">0.0788702025476506</td><td style="border: 1px solid white;">1.153095782</td><td style="border: 1px solid white;">1.164249713011</td><td style="border: 1px solid white;">1.1809806095275</td><td style="border: 1px solid white;">1.208865437055</td><td style="border: 1px solid white;">1.2367502645825</td><td style="border: 1px solid white;">1.253481161099</td><td style="border: 1px solid white;">1.26463509211</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Sliced</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.81600451483</td><td style="border: 1px solid white;">0.00789112051889268</td><td style="border: 1px solid white;">3.81042465</td><td style="border: 1px solid white;">3.811540622966</td><td style="border: 1px solid white;">3.813214582415</td><td style="border: 1px solid white;">3.81600451483</td><td style="border: 1px solid white;">3.818794447245</td><td style="border: 1px solid white;">3.820468406694</td><td style="border: 1px solid white;">3.82158437966</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Sticks</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">2.1695111646</td><td style="border: 1px solid white;">0.0501455588369294</td><td style="border: 1px solid white;">2.1340528999</td><td style="border: 1px solid white;">2.14114455284</td><td style="border: 1px solid white;">2.15178203225</td><td style="border: 1px solid white;">2.1695111646</td><td style="border: 1px solid white;">2.18724029695</td><td style="border: 1px solid white;">2.19787777636</td><td style="border: 1px solid white;">2.2049694293</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Trimmed bunches</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">1.10324987289</td><td style="border: 1px solid white;">0.0147135928643669</td><td style="border: 1px solid white;">1.0928457916</td><td style="border: 1px solid white;">1.094926607858</td><td style="border: 1px solid white;">1.098047832245</td><td style="border: 1px solid white;">1.10324987289</td><td style="border: 1px solid white;">1.108451913535</td><td style="border: 1px solid white;">1.111573137922</td><td style="border: 1px solid white;">1.11365395418</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>Whole</b></td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0.636942675159235669</td><td style="border: 1px solid white;">3.480119338735</td><td style="border: 1px solid white;">0.0963560092729786</td><td style="border: 1px solid white;">3.41198535117</td><td style="border: 1px solid white;">3.425612148683</td><td style="border: 1px solid white;">3.4460523449525</td><td style="border: 1px solid white;">3.480119338735</td><td style="border: 1px solid white;">3.5141863325175</td><td style="border: 1px solid white;">3.534626528787</td><td style="border: 1px solid white;">3.5482533263</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[11]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="See-Also">See Also<a class="anchor-link" href="#See-Also">&#182;</a></h3><table id="seealso">
    <tr><td><a href="../../main-methods/agg/index.php">vDataFrame.aggregate</a></td> <td>Computes the vDataFrame input aggregations.</td></tr>
</table>
</div>
</div>
</div>