<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<title>Аналітика Зарплат</title>
</head>

<body>
	<header>
	<h1>📊 Аналітика зарплат компанії</h1>
	</header>

	<div class="dashboard">
		<?php
		// ===============================
		// TODO 1: Вказати шлях до файлу employees.txt
		// ==============================
		// Перевірте, чи існує файл із даними перед його зчитуванням.

		$file = __DIR__ . '/employees.txt';

		if (!file_exists($file)) { // якщо файлу не існує
			echo "<p>⚠️ Файл employees.txt не знайдено.</p>";
			exit;
		}

		$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

		// echo '<pre>';
		// print_r($lines);
		// echo '<pre>';

		// ===============================
		// TODO 2: Зчитати дані з файлу у масив $employees
		// ===============================
		// Опрацюйте рядки та створіть масив $employees.

		$employees = [];
		foreach ($lines as $line) {
			$parts = explode(',', trim($line));
			// echo '<pre>';
			// print_r($parts);
			// echo '<pre>';

			if (count($parts) < 3) continue;

			$surname  = trim($parts[0]);
			$name     = trim($parts[1]);
			$salaries = array_slice($parts, 2);

			$salaries = array_map('intval', $salaries);

			$employees[] = [
				'surname'  => $surname,
				'name'     => $name,
				'salaries' => $salaries
			];
		}

		// echo '<pre>';
		// print_r($employees);
		// echo '<pre>';

		// ===============================
		// TODO 3: Розрахувати середню, мінімальну, максимальну зарплату
		// TODO 4: Створити масиви $months та $avg_salaries для графіка
		// ===============================

		// Демонстраційні дані (щоб сторінка відкривалась із прикладом)
		// $months = [
			// 'Січень',   'Лютий',   'Березень', 'Квітень',
			// 'Травень',  'Червень', 'Липень',   'Серпень',
			// 'Вересень', 'Жовтень', 'Листопад'
		// ];
		// $avg_salaries = [42000, 43500, 41000, 46000, 44500, 47000, 48000, 49500, 50500, 51500, 47300];

		$month_sums = array_fill(0, count($months), 0);

		foreach ($employees as $e) {
			foreach ($e['salaries'] as $i => $salary) {
				$month_sums[$i] += $salary;
			}
		}

		$avg_salaries = [];
		foreach ($month_sums as $sum) {
			$avg_salaries[] = round($sum / count($employees));
		}

		$months = [
			'Січень',   'Лютий',   'Березень', 'Квітень',
			'Травень',  'Червень', 'Липень',   'Серпень',
			'Вересень', 'Жовтень', 'Листопад'
		];


		// echo '<pre>';
		// print_r($avg_salaries);
		// echo '<pre>';

		// TODO 5: Після обробки файлу замінити ці демо-масиви на реальні дані
		
		// Картки статистики
		
		$all_salaries = [];
		foreach ($employees as $e) {
			$all_salaries = array_merge($all_salaries, $e['salaries']);
		}
		$avg_salary = round(array_sum($all_salaries) / count($all_salaries));
		$min_salary = min($all_salaries);
		$max_salary = max($all_salaries);
		?>

		<div class="stat-cards">
			<div class="card">
				<h2>Середня зарплата</h2>
				<p><?php echo $avg_salary . '  грн.'; ?></p>
			</div>
			<div class="card">
				<h2>Мінімальна зарплата</h2>
				<p><?php echo $min_salary . '  грн.'; ?></p>
			</div>
			<div class="card">
				<h2>Максимальна зарплата</h2>
				<p><?php echo $max_salary . '  грн.' ?></p>
			</div>
		</div>

		<!-- Графік -->
		<div class="chart-container">
			<h3>Динаміка середніх зарплат (<?= date('Y') ?>)</h3>
			<canvas id="salaryChart" height="120"></canvas>
		</div>

		<!-- Таблиця -->
		<table>
			<tr>
				<th>#</th>
				<th>Працівник</th>
				<?php foreach ($months as $m) : ?>
					<th><?= $m ?></th>
				<?php endforeach; ?>
			</tr>

			<!-- TODO 6: Замінити демо-рядки на PHP-цикл з реальними даними -->

			<?php foreach ($employees as $i => $e) : ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $e['surname'] . ' ' . $e['name'] ?></td>
					<?php foreach ($e['salaries'] as $s) : ?>
						<td><?= $s ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<footer>
		&copy; <?= date('Y') ?> HR Dashboard | Тема у стилі ThemeForest 🌿
	</footer>

	<script src="assets/js/chart.min.js"></script>
	<script>
		// ===============================
		// Дані з PHP (поки тестові)
		// ===============================
		const months = <?= json_encode($months, JSON_UNESCAPED_UNICODE); ?>;
		const salaries = <?= json_encode($avg_salaries, JSON_UNESCAPED_UNICODE); ?>;

		// ===============================
		// TODO 7: Коли PHP-код готовий, ці масиви мають містити реальні дані з файлу employees.txt
		// - labels → $months
		// - data → $avg_salaries
		// ===============================

		new Chart(document.getElementById('salaryChart'), {
			type: 'line',
			data: {
				labels: months, // TODO: залишити змінну з PHP
				datasets: [{
					label: 'Середня зарплата, грн', // TODO: можна змінити назву серії
					data: salaries, // TODO: PHP-масив середніх зарплат
					borderColor: '#4a80ff',
					backgroundColor: 'rgba(74,128,255,0.2)',
					borderWidth: 3,
					tension: 0.35,
					fill: true,
					pointRadius: 5,
					pointBackgroundColor: '#264780',
				}]
			},
			options: {
				plugins: {
					legend: {
						display: false
					},
					tooltip: {
						backgroundColor: '#264780',
						titleColor: '#fff',
						bodyColor: '#fff'
					}
				},
				scales: {
					y: {
						beginAtZero: false,
						grid: {
							color: '#e2ebff'
						}
					},
					x: {
						grid: {
							display: false
						}
					}
				}
			}
		});
	</script>
</body>

</html>