SELECT guarda_id,empleado.nombre1,empleado.`nombre2`,empleado.`apellido1`,empleado.`apellido2`,GROUP_CONCAT(DAY(fecha),' : ',tipo_turno,' ' ORDER BY  fecha ASC) 
FROM programacion JOIN empleado ON(empleado.`cedula`= programacion.`guarda_id`) GROUP BY guarda_id ORDER BY  guarda_id ASC


