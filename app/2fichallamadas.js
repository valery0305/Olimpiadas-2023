import React, { useState } from "react";
import {
  View,
  Text,
  TextInput,
  Picker,
  Button,
  ScrollView,
  StyleSheet,
} from "react-native";

const App = () => {
  const [fichas, setFichas] = useState([]);
  const [nombre, setNombre] = useState("");
  const [sexo, setSexo] = useState("");
  const [dni, setDNI] = useState("");
  const [telefono, setTelefono] = useState("");
  const [direccion, setDireccion] = useState("");
  const [fechaNacimiento, setFechaNacimiento] = useState("");
  const [tipoLlamado, setTipoLlamado] = useState("");
  const [tratamiento, setTratamiento] = useState("");
  const [doctor, setDoctor] = useState("");
  const [enfermero, setEnfermero] = useState("");

  const handleFormSubmit = () => {
    const formData = {
      nombre,
      sexo,
      dni,
      telefono,
      direccion,
      fechaNacimiento,
      tipoLlamado,
      tratamiento,
      doctor,
      enfermero,
    };
    setFichas([...fichas, formData]);
    // Limpiar el formulario después de enviar
    clearForm();
  };

  const handleDelete = (index) => {
    const newFichas = [...fichas];
    newFichas.splice(index, 1);
    setFichas(newFichas);
  };

  const clearForm = () => {
    setNombre("");
    setSexo("");
    setDNI("");
    setTelefono("");
    setDireccion("");
    setFechaNacimiento("");
    setTipoLlamado("");
    setTratamiento("");
    setDoctor("");
    setEnfermero("");
  };

  return (
    <ScrollView contentContainerStyle={styles.container}>
      <Text style={styles.headerText}>Registro de Pacientes</Text>
      <View style={styles.formContainer}>
        <Text style={styles.label}>Nombre y Apellido:</Text>
        <TextInput
          style={styles.input}
          value={nombre}
          onChangeText={setNombre}
        />

        <Text style={styles.label}>Sexo:</Text>
        <Picker
          style={styles.input}
          selectedValue={sexo}
          onValueChange={(value) => setSexo(value)}
        >
          <Picker.Item label="Femenino" value="femenino" />
          <Picker.Item label="Masculino" value="masculino" />
        </Picker>

        <Text style={styles.label}>DNI:</Text>
        <TextInput
          style={styles.input}
          value={dni}
          onChangeText={setDNI}
        />

        <Text style={styles.label}>Teléfono:</Text>
        <TextInput
          style={styles.input}
          value={telefono}
          onChangeText={setTelefono}
        />

        <Text style={styles.label}>Dirección:</Text>
        <TextInput
          style={styles.input}
          value={direccion}
          onChangeText={setDireccion}
        />

        <Text style={styles.label}>Fecha de nacimiento:</Text>
        <TextInput
          style={styles.input}
          value={fechaNacimiento}
          onChangeText={setFechaNacimiento}
        />

        <Text style={styles.label}>Tipo de Llamado:</Text>
        <Picker
          style={styles.input}
          selectedValue={tipoLlamado}
          onValueChange={(value) => setTipoLlamado(value)}
        >
          <Picker.Item label="Urgente" value="urgente" />
          <Picker.Item label="Normal" value="normal" />
        </Picker>

        <Text style={styles.label}>Tratamiento:</Text>
        <TextInput
          style={styles.input}
          value={tratamiento}
          onChangeText={setTratamiento}
        />

        <Text style={styles.label}>Doctor:</Text>
        <TextInput
          style={styles.input}
          value={doctor}
          onChangeText={setDoctor}
        />

        <Text style={styles.label}>Enfermero:</Text>
        <TextInput
          style={styles.input}
          value={enfermero}
          onChangeText={setEnfermero}
        />

        <Button title="Guardar" onPress={handleFormSubmit} color="#5160AF"/>

        {fichas.map((ficha, index) => (
          <View key={index}>
            <Text>Nombre: {ficha.nombre}</Text>
            <Text>Sexo: {ficha.sexo}</Text>
            <Text>DNI: {ficha.dni}</Text>
            <Text>Teléfono: {ficha.telefono}</Text>
            <Text>Dirección: {ficha.direccion}</Text>
            <Text>Fecha de Nacimiento: {ficha.fechaNacimiento}</Text>
            <Text>Tipo de Llamado: {ficha.tipoLlamado}</Text>
            <Text>Tratamiento: {ficha.tratamiento}</Text>
            <Text>Doctor: {ficha.doctor}</Text>
            <Text>Enfermero: {ficha.enfermero}</Text>
            <Button
              title="Eliminar"
              onPress={() => handleDelete(index)}
              color="#FF0000"
            />
          </View>
        ))}
      </View>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: {
    flexGrow: 1,
    padding: 16,
    backgroundColor: "#5160AF",
  },
  headerText: {
    color:'white',
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 16,
    textAlign: "center",
  },
  formContainer: {
    backgroundColor: "#FFFFFF",
    padding: 16,
    borderRadius: 8,
    marginBottom: 16,
  },
  label: {
    fontWeight: "bold",
    fontSize: 16,
    marginBottom: 8,
  },
  input: {
    height: 40,
    fontWeight: "bold",
    borderColor: "black",
    borderWidth: 1,
    marginBottom: 16,
    paddingHorizontal: 8,
  },
  fichasContainer: {
    backgroundColor: "#FFFFFF",
    borderRadius: 8,
    padding: 16,
  },
  fichaItem: {
    marginBottom: 16,
  },
  fichaText: {
    fontWeight: "bold",
    fontSize: 16,
    marginBottom: 8,
  },
});

export default App;