import React, { Component } from "react";
import {
  View,
  Text,
  TextInput,
  Button,
  StyleSheet,
  TouchableOpacity,
  Animated,
  Easing
} from "react-native";

class LoginScreen extends Component {
  state = {
    username: "",
    password: "",
    isRegistering: false,
    animation: new Animated.Value(0)
  };

  toggleRegister = () => {
    const { isRegistering } = this.state;

    Animated.timing(this.state.animation, {
      toValue: isRegistering ? 0 : 1,
      duration: 200,
      easing: Easing.ease,
      useNativeDriver: false
    }).start();

    this.setState((prevState) => ({
      isRegistering: !prevState.isRegistering
    }));
  };

  render() {
    const { isRegistering, animation } = this.state;
    const translateY = animation.interpolate({
      inputRange: [0, 1],
      outputRange: [0, -100]
    });

    return (
      <View style={styles.container}>
        <Animated.View
          style={[styles.formContainer, { transform: [{ translateY }] }]}
        >
          <Text style={styles.headerText}>
            {isRegistering ? "Registro" : "Inicio de Sesión"}
          </Text>
          <TextInput
            placeholder="Usuario"
            style={styles.input}
            onChangeText={(username) => this.setState({ username })}
          />
          <TextInput
            placeholder="Contraseña"
            style={styles.input}
            secureTextEntry
            onChangeText={(password) => this.setState({ password })}
          />
          <TouchableOpacity
            style={styles.submitButton}
            onPress={this.loginOrRegister}
          >
            <Text style={styles.submitButtonText}>
              {isRegistering ? "Registrarse" : "Iniciar Sesión"}
            </Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={this.toggleRegister}>
            <Text style={styles.toggleText}>
              {isRegistering
                ? "¿Ya tienes una cuenta? Iniciar Sesión"
                : "¿No tienes una cuenta? Registrarse"}
            </Text>
          </TouchableOpacity>
        </Animated.View>
      </View>
    );
  }

  loginOrRegister = () => {};
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: "#5160AF" // Cambia el color de fondo según tu estilo.
  },
  formContainer: {
    fontWeight: "bold",
    width: "80%",
    padding: 20,
    borderRadius: 10,
    backgroundColor: "white",
    elevation: 2, // Sombra en Android
    shadowOffset: { width: 0, height: 1 },
    shadowOpacity: 0.1,
    shadowRadius: 2
  },
  headerText: {
    fontSize: 28,
    marginBottom: 20,
    fontWeight: "bold",
    color: "#5160AF"
  },
  input: {
    color: "#5160AF",
    fontWeight: "bold",
    height: 40,
    borderColor: "#5160AF",
    borderWidth: 1,
    marginBottom: 15,
    paddingHorizontal: 10,
    borderRadius: 5,
    fontSize: 16
  },
  submitButton: {
    backgroundColor: "#5160AF",
    paddingVertical: 10,
    borderRadius: 5
  },
  submitButtonText: {
    color: "white",
    textAlign: "center",
    fontWeight: "bold",
    fontSize: 18
  },
  toggleText: {
    fontWeight: "bold",
    color: "#5160AF",
    marginTop: 10,
    textAlign: "center",
    fontSize: 14
  }
});

export default LoginScreen;