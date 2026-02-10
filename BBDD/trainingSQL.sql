--1. Muestra las competiciones celebradas en Estados Unidos.
select c.nombre, c.fecha_inicio, c.fecha_inicio, c.fecha_fin, n.nombre_pais FROM competicion c
    JOIN nacionalidad n ON c.codpais = n.codpais 
    WHERE n.nombre_pais LIKE "Estados Unidos";

-- 2. Muestra los eventos(pruebas realizadas) en la competición del año 2023, junto
-- con el nombre de la disciplina y el nombre de la competición. Ordémalos por la
-- distancia de la disciplina.

select e.id, d.nombre, c.nombre FROM eventos e
    JOIN disciplinas d ON e.id_disciplina = d.id
    JOIN competicion c ON e.id_competicion = c.id
    WHERE c.nombre LIKE "Mundial de Atletismo 2023" ORDER BY d.distancia;

--3.Cuántas atletas hay de cada país. Quédate sólo con los países que tienes dos
--atletas o más. Ordénalos por cantidad

select n.nombre_pais, n.codpais ,COUNT(*) AS cantidad_atletas FROM atletas a
    JOIN nacionalidad n ON  a.pais = n.codpais
    GROUP BY pais HAVING COUNT(*) >=2
    ORDER BY cantidad_atletas desc;

--4.Muestra para cada carrera de los mundiales del 2023 el mejor y el peor tiempo
--id nombre mejor_tiempo peor_tiempo

select e.id, d.nombre, MIN(r.resultado) AS peor_tiempo, MAX(r.resultado) AS mejor_iempo from resultados r  
    JOIN eventos e ON r.id_evento = e.id
    JOIN disciplinas d ON e.id_disciplina = d.id
    JOIN competicion c ON e.id_competicion = c.id
    WHERE YEAR(c.fecha_inicio)=2023
    GROUP BY e.id;
