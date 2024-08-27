#!/bin/bash

# Function to display error message and exit
error_exit() {
  echo "Error: $1" >&2
  exit 1
}

# Function to check if a command is available
check_command() {
  command -v "$1" >/dev/null 2>&1 || error_exit "$1 is not installed or not available in PATH."
}

# Function to perform migrations based on the argument
run_migration() {
  if [[ $1 == "fresh" ]]; then
    echo "Running migrate:fresh..."
    php artisan migrate:fresh --seed || error_exit "Migrate fresh failed."
  else
    echo "Running migrate..."
    php artisan migrate || error_exit "Migrate failed."
  fi
}

# Check required commands
check_command git
check_command composer
check_command php
check_command bun

# Clean untracked files and directories
echo "Cleaning untracked files and directories..."
git clean -fd || error_exit "Failed to clean untracked files."

# Pull the latest code from the main branch
echo "Pulling latest code from the main branch..."
git pull origin main || error_exit "Failed to pull from the main branch."

# Install dependencies with Composer
echo "Installing Composer dependencies..."
composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction || error_exit "Composer install failed."

# Run the build process using bun
echo "Running 'bun run build'..."
bun run build || error_exit "Bun build failed."

# Run migrations based on the provided argument
if [[ $# -eq 1 ]]; then
  run_migration "$1"
else
  echo "No migration option provided, running ordinary migrate..."
  run_migration "migrate"
fi

echo "Script executed successfully."
