install.packages("tidyverse")

library(tidyverse)

# Simular datos de un diseño 3x5 con 2 réplicas (30 observaciones)
set.seed(123)
A <- factor(rep(1:3, each = 10))
B <- factor(rep(rep(1:5, each = 2), times = 3))
mu <- 50
efecto_A <- c(0, 5, 10)
efecto_B <- c(0, 2, 4, 6, 8)
Y <- numeric(length(A))
contador <- 1
for(i in 1:3){
  for(j in 1:5){
    for(r in 1:2){
      Y[contador] <- mu + efecto_A[i] + efecto_B[j] + rnorm(1, 0, 3)
      contador <- contador + 1
    }
  }
}
datos <- data.frame(A = A, B = B, Y = Y)

# Ajuste del modelo ANOVA
modelo <- aov(Y ~ A * B, data = datos)

# Tabla ANOVA
summary(modelo)

# Cálculo manual de p-valor para un F dado (ejemplo para gl1=2, gl2=15, F=15)
f_observado_A <- 15
p_valor_A <- pf(f_observado_A, 2, 15, lower.tail = FALSE)
print(paste("P-valor manual para F =", f_observado_A, "con gl1=2, gl2=15:", round(p_valor_A, 4)))

# Prueba Tukey para comparaciones múltiples
tukey_A <- TukeyHSD(modelo, which = "A")
tukey_B <- TukeyHSD(modelo, which = "B")
print("Resultados Tukey para A:")
print(tukey_A)
print("Resultados Tukey para B:")
print(tukey_B)

# Gráfico 1: Boxplot para Y según A y B
ggplot(datos, aes(x = A, y = Y, fill = B)) +
  geom_boxplot() +
  labs(title = "Distribución de Y por niveles de A y B",
       x = "Factor A", y = "Respuesta Y") +
  theme_minimal() +
  scale_fill_brewer(palette = "Set1", name = "Factor B")

# Gráfico 2: Gráfico de interacción entre A y B
ggplot(datos, aes(x = B, y = Y, color = A, group = A)) +
  stat_summary(fun = mean, geom = "point", size = 3) +
  stat_summary(fun = mean, geom = "line") +
  labs(title = "Efecto de interacción entre A y B",
       x = "Factor B", y = "Media de Y") +
  theme_minimal() +
  scale_color_brewer(palette = "Dark2", name = "Factor A")

# Gráfico 3: Resultados de TukeyHSD para A
tukey_A_df <- as.data.frame(tukey_A$A)
tukey_A_df$comparacion <- rownames(tukey_A_df)
ggplot(tukey_A_df, aes(x = comparacion, y = diff)) +
  geom_point() +
  geom_errorbar(aes(ymin = lwr, ymax = upr), width = 0.2) +
  geom_hline(yintercept = 0, linetype = "dashed", color = "red") +
  labs(title = "Diferencias entre niveles de A (Tukey HSD)",
       x = "Comparación", y = "Diferencia de medias") +
  theme_minimal() +
  coord_flip()

# Gráfico 4: Dispersión con promedios
ggplot(datos, aes(x = B, y = Y, color = A)) +
  geom_point(alpha = 0.5, position = position_jitter(width = 0.1)) +
  stat_summary(aes(group = A), fun = mean, geom = "line", size = 1) +
  labs(title = "Dispersión y medias de Y por A y B",
       x = "Factor B", y = "Respuesta Y") +
  theme_minimal() +
  scale_color_brewer(palette = "Set2", name = "Factor A")
