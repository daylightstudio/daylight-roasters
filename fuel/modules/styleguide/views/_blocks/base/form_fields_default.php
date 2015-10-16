<form>
  <fieldset>
    <div class="form-field"><label>Text input</label> <input type="text"></div>
    <div class="form-field"><label>Text input with placeholder</label> <input type="text" placeholder="I'm placeholder text"></div>
    <div class="form-field"><label>Readonly input</label> <input type="text" value="Read only text input" readonly></div>
    <div class="form-field"><label>Disabled input</label> <input type="text" value="Disabled text input" disabled></div>
    <div class="form-field"><label>Required input <span class="required">*</span></label> <input type="text" required></div>
    <div class="form-field"><label>Email input</label> <input type="email"></div>
    <div class="form-field"><label>Search input</label> <input type="search"></div>
    <div class="form-field"><label>Speech recognition input</label> <input type="text" id="speech" name="speech" x-webkit-speech=""></div>
    <div class="form-field"><label>Tel input</label> <input type="tel"></div>
    <div class="form-field"><label>Phone (International)</label> <input name="field_country_code" maxlength="3" /> - <input name="field_city_code" maxlength="4" /> - <input name="field_phone_int" maxlength="8" /></div>
    <div class="form-field"><label>URL input</label> <input type="url" placeholder="http://"></div>
    <div class="form-field"><label>Password input</label> <input type="password" value="password"></div>
    <div class="form-field"><label>Select field</label> <select><option>Option 01</option><option>Option 02</option></select></div>
    <div class="form-field"><label>Multiple select field</label><select multiple size="5"><option>Option 1</option><option>Option 2</option><option>Option 3</option><option>Option 4</option><option>Option 5</option><option>Option 6</option><option>Option 7</option><option>Option 8</option><option>Option 9</option><option>Option 10</option></select></div>
    <div class="form-field"><label>Radio input</label> <input type="radio" name="rad"></div>
    <div class="form-field"><label>Checkbox input</label> <input type="checkbox"></div>
    <div class="form-field"><label><input type="radio" name="rad"> Radio input</label></div>
    <div class="form-field"><label><input type="checkbox"> Checkbox input</label></div>
    <div class="form-field"><label>File input</label> <input type="file"></div>
    <div class="form-field"><label>Textarea</label> <textarea cols="30" rows="5" >Textarea text</textarea></div>
    <div class="form-field"><label>Color input</label> <input type="color" value="#000000"></div>
    <div class="form-field"><label>Number input</label> <input type="number" value="5" min="0" max="10"></div>
    <div class="form-field"><label>Range input</label> <input type="range" id="range" value="0" min="0" max="100"> <output for="range">0</output> 
    <script>
      if (document.querySelector) {
        document.querySelector('#range').onchange = function(e) {
          e.target.nextElementSibling.innerText = e.target.value;
        }
      }
    </script>
    </div>
    <div class="form-field"><label>Date input</label> <input type="date"></div>
    <div class="form-field"><label>Month input</label> <input type="month"></div>
    <div class="form-field"><label>Week input</label> <input type="week"></div>
    <div class="form-field"><label>Time input</label> <input type="time"></div>
    <div class="form-field"><label>Datetime input</label> <input type="datetime"></div>
    <div class="form-field"><label>Datetime-local input</label> <input type="datetime-local"></div>
  </fieldset>  
</form>