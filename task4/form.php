<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>DEV PROFILE | Анкета разработчика</title>
  <style>
    :root {
      --neon-primary: #00f5d4;
      --neon-secondary: #f15bb5;
      --neon-tertiary: #9b5de5;
      --dark-bg: #0a0a0a;
      --card-bg: #1a1a1a;
      --text-primary: #f8f9fa;
      --text-secondary: #adb5bd;
      --error: #ff006e;
      --success: #38b000;
      --border: #2b2d42;
    }
    
    @font-face {
      font-family: 'Cyber';
      src: url('https://fonts.cdnfonts.com/css/cyberpunk-is-not-dead') format('woff2');
    }
    
    body {
      font-family: 'Rajdhani', 'Cyber', sans-serif;
      background-color: var(--dark-bg);
      margin: 0;
      padding: 0;
      color: var(--text-primary);
      line-height: 1.6;
      background-image: 
        radial-gradient(circle at 10% 20%, rgba(155, 93, 229, 0.1) 0%, transparent 20%),
        radial-gradient(circle at 90% 80%, rgba(241, 91, 181, 0.1) 0%, transparent 20%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cyber-container {
      width: 90%;
      max-width: 800px;
      background: var(--card-bg);
      padding: 2.5rem;
      border-radius: 0;
      border: 2px solid var(--neon-primary);
      box-shadow: 
        0 0 15px rgba(0, 245, 212, 0.3),
        0 0 30px rgba(155, 93, 229, 0.2);
      position: relative;
      overflow: hidden;
    }
    
    .cyber-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--neon-primary), var(--neon-tertiary), var(--neon-secondary));
    }
    
    h1 {
      text-align: center;
      color: var(--neon-primary);
      margin: 0 0 2rem;
      font-weight: 700;
      font-size: 2.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 0 0 10px rgba(0, 245, 212, 0.5);
      font-family: 'Cyber', sans-serif;
    }
    
    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }
    
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    .full-width {
      grid-column: span 2;
    }
    
    label {
      display: block;
      margin-bottom: 0.75rem;
      font-weight: 600;
      color: var(--neon-primary);
      font-size: 1.1rem;
      letter-spacing: 0.5px;
    }
    
    .required::after {
      content: " *";
      color: var(--error);
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
      width: 100%;
      padding: 0.85rem 1rem;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid var(--border);
      border-radius: 0;
      font-size: 1rem;
      box-sizing: border-box;
      transition: all 0.3s ease;
      color: var(--text-primary);
      font-family: 'Rajdhani', sans-serif;
    }
    
    input:focus,
    select:focus,
    textarea:focus {
      outline: none;
      border-color: var(--neon-secondary);
      box-shadow: 0 0 10px rgba(241, 91, 181, 0.3);
      background: rgba(241, 91, 181, 0.05);
    }

    select[multiple] {
      height: 150px;
      padding: 0.5rem;
    }
    
    .radio-group,
    .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      margin: 1rem 0;
    }
    
    .radio-option,
    .checkbox-option {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }
    
    .radio-option label,
    .checkbox-option label {
      margin: 0;
      font-weight: 500;
      cursor: pointer;
      color: var(--text-primary);
    }
    
    input[type="radio"],
    input[type="checkbox"] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 1.25em;
      height: 1.25em;
      border: 2px solid var(--neon-tertiary);
      cursor: pointer;
      position: relative;
      transition: all 0.2s;
    }
    
    input[type="radio"] {
      border-radius: 50%;
    }
    
    input[type="radio"]:checked {
      background: var(--neon-tertiary);
      box-shadow: 0 0 5px var(--neon-tertiary);
    }
    
    input[type="checkbox"]:checked {
      background: var(--neon-tertiary);
      box-shadow: 0 0 5px var(--neon-tertiary);
    }
    
    input[type="checkbox"]:checked::after {
      content: '✓';
      position: absolute;
      color: white;
      font-size: 0.9em;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    button {
      background: transparent;
      color: var(--neon-primary);
      border: 2px solid var(--neon-primary);
      padding: 1rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 0;
      cursor: pointer;
      width: 100%;
      margin-top: 1.5rem;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
      overflow: hidden;
    }
    
    button:hover {
      background: rgba(0, 245, 212, 0.1);
      box-shadow: 0 0 15px rgba(0, 245, 212, 0.4);
      text-shadow: 0 0 5px var(--neon-primary);
    }
    
    button::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(
        to bottom right,
        transparent 45%,
        rgba(0, 245, 212, 0.3) 50%,
        transparent 55%
      );
      transform: rotate(30deg);
      transition: all 0.5s ease;
      opacity: 0;
    }
    
    button:hover::after {
      animation: shine 1.5s infinite;
      opacity: 1;
    }

    .error-message {
      color: var(--error);
      margin: 0.5rem 0 0;
      font-size: 0.9rem;
      text-shadow: 0 0 5px rgba(255, 0, 110, 0.3);
    }

    .error-field {
      border-color: var(--error) !important;
      background: rgba(255, 0, 110, 0.05) !important;
      box-shadow: 0 0 10px rgba(255, 0, 110, 0.2) !important;
    }

    .success {
      color: var(--success);
      text-align: center;
      margin: 2rem 0;
      font-weight: 600;
      font-size: 1.2rem;
      text-shadow: 0 0 5px rgba(56, 176, 0, 0.3);
    }
    
    .form-note {
      font-size: 0.85rem;
      color: var(--text-secondary);
      margin-top: 0.5rem;
      font-style: italic;
    }
    
    @keyframes shine {
      0% { transform: rotate(30deg) translate(-30%, -30%); }
      100% { transform: rotate(30deg) translate(30%, 30%); }
    }
    
    @media (max-width: 768px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
      
      .full-width {
        grid-column: span 1;
      }
      
      .cyber-container {
        padding: 1.5rem;
        width: 95%;
      }
      
      h1 {
        font-size: 2rem;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cyber-container">
    <h1>DEV PROFILE</h1>

    <?php
    if (!empty($messages)) {
      foreach ($messages as $msg) {
        echo $msg;
      }
    }

    function showError($field) {
      global $errors;
      if (!empty($errors[$field])) {
        echo '<div class="error-message">Поле заполнено некорректно или содержит недопустимые символы.</div>';
      }
    }

    function errorClass($field) {
      global $errors;
      return !empty($errors[$field]) ? 'error-field' : '';
    }
    ?>

    <form action="index.php" method="POST" novalidate class="form-grid">
      <div class="form-group full-width">
        <label class="required">ФИО</label>
        <input type="text" name="fio" maxlength="150"
          value="<?php echo htmlspecialchars($values['fio'] ?? ''); ?>"
          class="<?php echo errorClass('fio'); ?>"
          pattern="[А-Яа-яЁёA-Za-z\s]+"
          placeholder="Иванов Иван Иванович"
          required>
        <?php showError('fio'); ?>
        <div class="form-note">Только буквы и пробелы, макс. 150 символов</div>
      </div>

      <div class="form-group">
        <label class="required">Телефон</label>
        <input type="tel" name="phone"
          value="<?php echo htmlspecialchars($values['phone'] ?? ''); ?>"
          class="<?php echo errorClass('phone'); ?>"
          pattern="[\+\d\s\-]+"
          placeholder="+7 (999) 123-45-67"
          required>
        <?php showError('phone'); ?>
      </div>

      <div class="form-group">
        <label class="required">Email</label>
        <input type="email" name="email"
          value="<?php echo htmlspecialchars($values['email'] ?? ''); ?>"
          class="<?php echo errorClass('email'); ?>"
          placeholder="your@email.com"
          required>
        <?php showError('email'); ?>
      </div>

      <div class="form-group">
        <label class="required">Дата рождения</label>
        <input type="date" name="birth_date"
          value="<?php echo htmlspecialchars($values['birth_date'] ?? ''); ?>"
          class="<?php echo errorClass('birth_date'); ?>"
          required>
        <?php showError('birth_date'); ?>
      </div>

      <div class="form-group full-width">
        <label class="required">Пол</label>
        <div class="radio-group <?php echo errorClass('gender'); ?>">
          <div class="radio-option">
            <input type="radio" name="gender" value="male" id="gender-male"
              <?php if (($values['gender'] ?? '') === 'male') echo 'checked'; ?> required>
            <label for="gender-male">Мужской</label>
          </div>
          <div class="radio-option">
            <input type="radio" name="gender" value="female" id="gender-female"
              <?php if (($values['gender'] ?? '') === 'female') echo 'checked'; ?>>
            <label for="gender-female">Женский</label>
          </div>
          <div class="radio-option">
            <input type="radio" name="gender" value="other" id="gender-other"
              <?php if (($values['gender'] ?? '') === 'other') echo 'checked'; ?>>
            <label for="gender-other">Другой</label>
          </div>
        </div>
        <?php showError('gender'); ?>
      </div>

      <div class="form-group full-width">
        <label class="required">Любимый язык программирования</label>
        <select name="languages[]" multiple class="<?php echo errorClass('languages'); ?>" required>
          <?php
          $langs = [
            '1' => 'Pascal',
            '2' => 'C',
            '3' => 'C++',
            '4' => 'JavaScript',
            '5' => 'PHP',
            '6' => 'Python',
            '7' => 'Java',
            '8' => 'Haskell',
            '9' => 'Clojure',
            '10' => 'Prolog',
            '11' => 'Scala',
            '12' => 'Go'
          ];
          $selectedLangs = $values['languages'] ?? [];
          foreach ($langs as $id => $name) {
            $selected = in_array($id, $selectedLangs) ? 'selected' : '';
            echo "<option value=\"$id\" $selected>$name</option>";
          }
          ?>
        </select>
        <?php showError('languages'); ?>
      </div>

      <div class="form-group full-width">
        <label>Биография</label>
        <textarea name="bio" rows="5" placeholder="Расскажите о своем опыте и навыках..."><?php echo htmlspecialchars($values['bio'] ?? ''); ?></textarea>
      </div>

      <div class="form-group full-width">
        <div class="checkbox-group <?php echo errorClass('agree'); ?>">
          <div class="checkbox-option">
            <input type="checkbox" name="agree" id="agree" <?php if (!empty($values['agree'])) echo 'checked'; ?> required>
            <label for="agree" class="required">Я согласен(а) с условиями</label>
          </div>
        </div>
        <?php showError('agree'); ?>
      </div>

      <div class="form-group full-width">
        <button type="submit">
          <span>СОХРАНИТЬ ПРОФИЛЬ</span>
        </button>
      </div>
    </form>
  </div>
</body>
</html>