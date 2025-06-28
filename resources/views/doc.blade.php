<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Documentation API Employés</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 leading-relaxed">

<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-4xl font-bold text-purple-700 mb-4">📘 API Employés - Documentation</h1>
    <p class="text-lg text-gray-600 mb-10">Consultez et gérez les employés via une API RESTful en Laravel.</p>

    <!-- Endpoints -->
    <h2 class="text-2xl font-semibold text-orange-600 mb-4">🔗 Endpoints disponibles</h2>
    <table class="w-full mb-8 text-sm border border-gray-300">
        <thead class="bg-gray-100">
        <tr>
            <th class="text-left p-2 border-b">Méthode</th>
            <th class="text-left p-2 border-b">URL</th>
            <th class="text-left p-2 border-b">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="p-2 border-b font-mono">GET</td>
            <td class="p-2 border-b font-mono">Api/employees</td>
            <td class="p-2 border-b">Retourne la liste de tous les employés avec leurs tags</td>
        </tr>
        <tr>
            <td class="p-2 border-b font-mono">GET</td>
            <td class="p-2 border-b font-mono">Api/employees/{id}</td>
            <td class="p-2 border-b">Retourne un seul employé via son ID (MST_SQ)</td>
        </tr>
        </tbody>
    </table>

    <!-- Exemple de réponse -->
    <h2 class="text-2xl font-semibold text-orange-600 mb-4">📄 Exemple de réponse JSON</h2>
    <h3 class="font-semibold mb-2 text-gray-700">GET /Api/employees</h3>
    <pre class="bg-gray-900 text-green-100 p-4 rounded text-sm overflow-x-auto mb-6"><code>{
  "status": true,
  "data": [
    {
      "MST_SQ": 106133,
      "EMP_EMPNO": "1013-008100",
      "EMP_SURNAME": "Kawel",
      "EMP_FIRSTNAME": "Jean Luc",
      "tags": [
        {
          "TAG_CODE": "1532469764",
          "TT_CODEID": 9,
          "TAG_RESTRICTED": 0
        }
      ]
    }
  ]
}</code></pre>

    <h3 class="font-semibold mb-2 text-gray-700">GET Api/employees/106133</h3>
    <pre class="bg-gray-900 text-green-100 p-4 rounded text-sm overflow-x-auto mb-10"><code>{
  "status": true,
  "data": {
    "MST_SQ": 106133,
    "EMP_EMPNO": "1013-008100",
    "EMP_SURNAME": "Kawel",
    "EMP_FIRSTNAME": "Jean Luc",
    "tags": [
      {
        "TAG_CODE": "1532469764",
        "TT_CODEID": 9,
        "TAG_RESTRICTED": 0
      }
    ]
  }
}</code></pre>

    <!-- Champs -->
    <h2 class="text-2xl font-semibold text-orange-600 mb-4">📚 Champs retournés</h2>
    <ul class="list-disc pl-6 text-sm text-gray-700 mb-10">
        <li><strong>MST_SQ</strong> : ID interne (clé primaire)</li>
        <li><strong>EMP_EMPNO</strong> : Matricule de l’employé</li>
        <li><strong>EMP_SURNAME</strong> : Nom</li>
        <li><strong>EMP_FIRSTNAME</strong> : Prénom</li>
        <li><strong>tags</strong> : Liste d'objets contenant :
            <ul class="list-disc pl-6 mt-1">
                <li><strong>TAG_CODE</strong> : Code du badge</li>
                <li><strong>TT_CODEID</strong> : Type de tag</li>
                <li><strong>TAG_RESTRICTED</strong> : Statut de restriction (0 = libre)</li>
            </ul>
        </li>
    </ul>




    <div class="mt-12 text-center text-sm text-gray-500">
        @ Jean Luc Kawel {{ now()->year }}
    </div>
</div>

</body>
</html>
