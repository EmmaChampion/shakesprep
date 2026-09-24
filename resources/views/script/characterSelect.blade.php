<x-master-layout title="Select Your Role">
    <form action="/script" method="POST">
        @csrf

        <h1 class="text-3xl font-bold">Select Your Role</h1>
        <select name="play" id="playSelect" class="dropdown text-lg mt-6 bg-base-200 outline-base-content outline-solid outline-2 p-2 rounded-md">
            <option value="" disabled selected hidden>Select a Play</option>
            <option value="AWW">All's Well That Ends Well</option>
            <option value="Ant">Antony and Cleopatra</option>
            <option value="AYL">As You Like It</option>
            <option value="Err">The Comedy of Errors</option>
            <option value="Cor">Coriolanus</option>
            <option value="Cym">Cymbeline</option>
            <option value="Ham">Hamlet</option>
            <option value="1H4">Henry IV, Part 1</option>
            <option value="2H4">Henry IV, Part 2</option>
            <option value="H5">Henry V</option>
            <option value="1H6">Henry VI, Part 1</option>
            <option value="2H6">Henry VI, Part 2</option>
            <option value="3H6">Henry VI, Part 3</option>
            <option value="H8">Henry VIII</option>
            <option value="JC">Julius Caesar</option>
            <option value="Jn">King John</option>
            <option value="Lr">King Lear</option>
            <option value="LLL">Love's Labor's Lost</option>
            <option value="Mac">Macbeth</option>
            <option value="MM">Measure for Measure</option>
            <option value="MV">The Merchant of Venice</option>
            <option value="Wiv">The Merry Wives of Windsor</option>
            <option value="MND">A Midsummer Night's Dream</option>
            <option value="Ado">Much Ado About Nothing</option>
            <option value="Oth">Othello</option>
            <option value="Per">Pericles</option>
            <option value="R2">Richard II</option>
            <option value="R3">Richard III</option>
            <option value="Rom">Romeo and Juliet</option>
            <option value="Shr">The Taming of the Shrew</option>
            <option value="Tmp">The Tempest</option>
            <option value="Tim">Timon of Athens</option>
            <option value="Tit">Titus Andronicus</option>
            <option value="Tro ">Troilus and Cressida</option>
            <option value="TN">Twelfth Night</option>
            <option value="TGV">Two Gentlemen of Verona</option>
            <option value="TNK">Two Noble Kinsmen</option>
            <option value="WT">The Winter's Tale</option>
        </select>

        <br><br>

        <select name="character" id="characterSelect" disabled class="dropdown text-lg bg-base-200 outline-base-content outline-solid outline-2 p-2 rounded-md opacity-50">
            <option value="">Select Play First</option>
            <option value="">Macbeth</option>
        </select>

        <br><br>

        <button id="submit" type="submit" class="btn btn-lg" disabled>See My Script!</button>
    </form>

    @vite('resources/js/custom-scripts/roleSelect.js')
</x-master-layout>