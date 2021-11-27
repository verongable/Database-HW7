

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <div id="personal-info">
        <div class="two-col">
            <div class="col1">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" value="<?php if(isset($_POST['full_name'])) echo htmlspecialchars($_POST['full_name']); ;?>">
                <span class="error">
                <?php echo $full_name_err; ?>
                </span>
            </div>

            <div class="col2">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ;?>">
                <span class="error">
                <?php echo $email_err; ?>
                </span>
            </div>
        </div>

        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ;?>">
        <span class="error">
            <?php echo $phone_err; ?>
        </span>

        <label for="street_address">Street Address:</label>
        <input type="text" name="street_address" value="<?php if(isset($_POST['street_address'])) echo htmlspecialchars($_POST['street_address']); ;?>">
        <span class="error">
            <?php echo $street_address_err; ?>
        </span>

        <label for="city">City:</label>
        <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo htmlspecialchars($_POST['city']); ;?>">  
        <span class="error">
            <?php echo $city_err; ?>
        </span>

        <label for="state">State:</label>
        <input type="text" name="state" value="<?php if(isset($_POST['state'])) echo htmlspecialchars($_POST['state']); ;?>">  
            <span class="error"><?php echo $state_err; ?></span>
            </select>
            
        <label for="zipcode">Zipcode:</label>
        <input type="number" name="zipcode" value="<?php if(isset($_POST['zipcode'])) echo htmlspecialchars($_POST['zipcode']); ;?>"> 
        <span class="error"><?php echo $zipcode_err; ?></span>
    </div>

    <div id ="pet-info">
        <label for="pet_type">Pet Type:</label>
        <select name="pet_type">
            <option value="" NULL
            <?php if(isset($_POST['pet_type']) && $_POST['pet_type'] == NULL) echo 'selected="unselected"';?>>Select One</option>

            <option value="dog" <?php if(isset($_POST['pet_type']) && $_POST['pet_type'] == 'dog') echo 'selected="selected"';?>>Dog</option>
            
            <option value="cat" <?php if(isset($_POST['pet_type']) && $_POST['pet_type'] == 'cat') echo 'selected="selected"' ;?>>Cat</option>
            <span class="error"><?php echo $pet_type_err; ?></span>
            </select>

        <label for="allergies">Allergies (check all that apply):</label>
        <ul>
            <li><input type="checkbox" name="allergies[]" value="chicken"
            <?php if(isset($_POST['allergies']) && in_array('chicken', $allergies)) echo 'checked="checked"';?>>Chicken</li>

            <li><input type="checkbox" name="allergies[]" value="beef" <?php if(isset($_POST['allergies']) && in_array('beef', $allergies)) echo 'checked="checked"';?>>Beef</li>

            <li><input type="checkbox" name="allergies[]" value="lamb" <?php if(isset($_POST['allergies']) && in_array('lamb', $allergies)) echo 'checked="checked"';?>>Lamb</li>

            <li><input type="checkbox" name="allergies[]" value="eggs" <?php if(isset($_POST['allergies']) && in_array('eggs', $allergies)) echo 'checked="checked"';?>>Eggs</li>

            <li><input type="checkbox" name="allergies[]" value="dairy" <?php if(isset($_POST['allergies']) && in_array('dairy', $allergies)) echo 'checked="checked"';?>>Dairy</li>

            <li><input type="checkbox" name="allergies[]" value="soy" <?php if(isset($_POST['allergies']) && in_array('soy', $allergies)) echo 'checked="checked"';?>>Soy</li>

            <li><input type="checkbox" name="allergies[]" value="wheat" <?php if(isset($_POST['allergies']) && in_array('wheat', $allergies)) echo 'checked="checked"';?>>Wheat</li>

            <li><input type="checkbox" name="allergies[]" value="other" <?php if(isset($_POST['allergies']) && in_array('other', $allergies)) echo 'checked="checked"';?>>Other</li>

            <li><input type="checkbox" name="allergies[]" value="none" <?php if(isset($_POST['allergies']) && in_array('none', $allergies)) echo 'checked="checked"';?>>None</li>
        </ul>
        <span class="error"><?php echo $allergies_err;?></span>

        <label for="comments">Comments:</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
        <span class="error"> <?php echo $comments_err; ?></span>
    </div>

        <label for="privacy">Privacy:</label>
        <ul>
            <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"' ;?>>I agree</li>
        </ul>
        <span class="error">
            <?php echo $privacy_err; ?>
        </span>

        <input type="submit" value="Send">
        <p><a href="" class="reset">Reset</a></p>
    </fieldset>
    </form>