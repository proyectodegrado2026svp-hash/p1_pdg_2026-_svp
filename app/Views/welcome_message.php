<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U.E. San Vicente de Paúl - Agenda Escolar</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f4f6f9;
            color: #333;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            max-width: 1000px;
            width: 100%;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h1 { 
            color: #1e293b; 
            font-size: 24px;
            margin-bottom: 8px;
        }
        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 30px;
        }
        h2 { 
            color: #334155; 
            font-size: 18px;
            margin-bottom: 15px;
            border-left: 4px solid #4f46e5;
            padding-left: 10px;
        }
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        table { 
            border-collapse: collapse; 
            width: 100%;
            text-align: left;
            font-size: 15px;
        }
        th { 
            background-color: #1e1b4b; /* Azul noche elegante */
            color: #ffffff; 
            padding: 14px 16px; 
            font-weight: 600;
        }
        td { 
            padding: 12px 16px; 
            color: #475569;
            border-bottom: 1px solid #edf2f7;
        }
        tr:nth-child(even) { 
            background-color: #f8fafc; 
        }
        tr:hover {
            background-color: #f1f5f9;
            transition: background-color 0.2s ease;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>¡Bienvenido a la Agenda Escolar Digital!</h1>
        <p class="subtitle">El entorno local y la base de datos están conectados de forma correcta.</p>

        <h2>Lista de Estudiantes Registrados</h2>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>CI Persona</th>
                        <th>Nro Lista</th>
                        <th>CI Tutor</th>
                        <th>ID Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($estudiantes)): ?>
                        <?php foreach($estudiantes as $e): ?>
                        <tr>
                            <td><strong><?= esc($e['ci_persona']) ?></strong></td>
                            <td><?= esc($e['nro_lista']) ?></td>
                            <td><?= esc($e['ci_tutor']) ?></td> <td><?= esc($e['id_curso']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #94a3b8;">No hay estudiantes registrados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>