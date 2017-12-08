<!doctype html>
<html lang="en">
<head>
    <title>QRisk</title>
<!--    <meta http-equiv="refresh" content="2">-->
    <meta name="description" content="QRisk">
    <meta name="author" content="MoHo Khaleqi">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">

</head>
<body>


    <section class="hero is-dark">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                   QRisk Calculator
                </h1>
                <h2 class="subtitle">
                    Primary subtitle
                </h2>
            </div>
        </div>
    </section>

<br>
<br>
<br>

    <div class="container">

        <div class="tile is-ancestor">
            <div class="tile is-vertical is-11">
                <div class="tile">

                    <div class="tile is-parent is-vertical is-6">
                        <form name="calculator" action='/answer.php' method='POST'>

                            <article class="tile is-child notification is-warning">

                                <h2 class="title is-2">About you</h2>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Age:</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input type='number' class="input" placeholder="Age (25-84)" min="25" max="84" name='age' >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Sex:</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <label class="radio">
                                                    <input type="radio" name='sex' value='1'>
                                                    Male
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name='sex' value='0'>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Ethnicity:</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <div class="select">
                                                    <select name=ethnicity>
                                                        <option value='1' >White or not stated</option>
                                                        <option value='2' >Indian</option>
                                                        <option value='3' >Pakistani</option>
                                                        <option value='4' >Bangladeshi</option>
                                                        <option value='5'>Other Asian</option>
                                                        <option value='6' >Black Caribbean</option>
                                                        <option value='7' >Black African</option>
                                                        <option value='8' >Chinese</option>
                                                        <option value='9' >Other ethnic group</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label">
                                        <label class="label">Postcode:</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input type="text" class="input" name='postcode' placeholder="UK postcode - Leave blank if unknown" title="Leave blank if unknown">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </article>

                            <article class="tile is-child notification is-warning">
                                <h2 class="title is-2">Clinical information</h2>


                                    <table>
                                        <tr>
                                            <td>Smoking status:</td>
                                            <td>
                                                <select NAME=smoke_cat>
                                                    <option value='0' selected>non-smoker</option>
                                                    <option value='1' >ex-smoker</option>
                                                    <option value='2' >light smoker (less than 10)</option>
                                                    <option value='3' >moderate smoker (10 to 19)</option>
                                                    <option value='4' >heavy smoker (20 or over)</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Diabetes status:</td>
                                            <td>
                                                <select NAME=diabetes_cat>
                                                    <option value='0' selected>none</option>
                                                    <option value='1' >type 1</option>
                                                    <option value='2' >type 2</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Angina or heart attack in a 1st degree relative < 60?</td>
                                            <td><INPUT type='checkbox' name='fh_cvd'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Chronic kidney disease (stage 3, 4 or 5)?</td>
                                            <td><INPUT type='checkbox' name='b_renal'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Atrial fibrillation?</td>
                                            <td><INPUT type='checkbox' name='b_AF'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>On blood pressure treatment?</td>
                                            <td><INPUT type='checkbox' name='b_treatedhyp'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Do you have migraines?</td>
                                            <td><INPUT type='checkbox' name='b_migraine'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Rheumatoid arthritis?</td>
                                            <td><INPUT type='checkbox' name='b_ra'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Systemic lupus erythematosis (SLE)?</td>
                                            <td><INPUT type='checkbox' name='b_sle'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>
                                                Severe mental illness? <br/>
                                                <small>(this includes schizophrenia, bipolar disorder and moderate/severe depression)</small>
                                            </td>
                                            <td><INPUT type='checkbox' name='b_semi'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>On atypical antipsychotic medication?</td>
                                            <td><INPUT type='checkbox' name='b_atypicalantipsy'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Are you on regular steroid tablets?</td>
                                            <td><INPUT type='checkbox' name='b_corticosteroids'  ></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>A diagnosis of or treatment for erectile disfunction?</td>
                                            <td><INPUT type='checkbox' name='b_impotence2'  ></td>
                                        </tr>
                                    </table>
                                    <fieldset>
                                        <legend>Leave blank if unknown</legend>
                                        <table>
                                            <tr>
                                                <td>Cholesterol/HDL ratio:</td>
                                                <td><INPUT type='text' name='rati' size=7 value='' id='rati'></td>
                                            </tr>
                                        </table>
                                        <table>
                                            <tr>
                                                <td>Systolic blood pressure (mmHg):</td>
                                                <td><INPUT type='text' name='sbp' size=7 value='' id='sbp'></td>
                                            </tr>
                                        </table>
                                        <table>
                                            <tr>
                                                <td>Standard deviation of at least two most recent systolic blood pressure readings (mmHg):</td>
                                                <td><INPUT type='text' name='sbps5' size=7 value='' id='sbps5'></td>
                                            </tr>
                                        </table>
                                        <fieldset>
                                            <legend>Body mass index</legend>
                                            <table>
                                                <tr>
                                                    <td>Height (cm):</td>
                                                    <td><INPUT type='text' name='height' size=7 value='184' id='height'></td>
                                                </tr>
                                                <tr>
                                                    <td>Weight (kg):</td>
                                                    <td><INPUT type='text' name='weight' size=7 value='86' id='weight'></td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                    </fieldset>


                            </article>

                            <article class="tile is-child notification">
                            <div class="content is-centered">
                                <button class="button is-primary is-medium is-rounded is-11" name="calculate">Calculate risk</button>
                            </div>
                        </article>
                        </form>

                    </div>

                    <div class="tile is-parent is-6">
                        <article class="tile is-child notification is-success">
                            <div class="content">
                                <p class="title">Result</p>
                                <p class="subtitle">Answer will be here</p>
                                <div class="content">
                                    <article class="message is-danger">
                                        <div class="message-header">
                                            <p>Primary</p>
                                            <button class="delete" aria-label="delete"></button>
                                        </div>
                                        <div class="message-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>

            </div>

        </div>




</div>

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>QRisk</strong> Calculator by <a href="http://moho.io">MoHo Khaleqi</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.<br>
                I have used <a href="https://qrisk.org/three/">QRISK</a> website and change the algorithm to PHP.
            </p>
        </div>
    </div>
</footer>

</body>
</html>